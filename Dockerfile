# ============================
#  Stage 1: Build Assets (Node)
# ============================
FROM node:16-alpine AS node-build

WORKDIR /app

COPY ppdb/package.json .
COPY ppdb/package-lock.json* .

# ---- FIX TIMEOUT & NETWORK ----
# 1. Pakai registry cepat (npmmirror)
# 2. Perbesar timeout agar tidak ERR_SOCKET_TIMEOUT
# 3. Install dengan prefer-offline agar lebih stabil
RUN npm config set registry https://registry.npmmirror.com \
    && npm config set fetch-retry-maxtimeout 300000 \
    && npm config set fetch-timeout 300000 \
    && npm install --legacy-peer-deps --prefer-offline --no-audit --progress=false

COPY ppdb/resources ./resources
COPY ppdb/webpack.mix.js .

RUN npm run production

RUN mkdir -p public && \
    if [ ! -f public/mix-manifest.json ]; then echo '{}' > public/mix-manifest.json; fi


# ====================================
# Stage 2: PHP + Composer Dependencies
# ====================================
FROM php:8.0-fpm-alpine AS php-base

RUN apk add --no-cache \
    git curl zip unzip libpng-dev libzip-dev oniguruma-dev mysql-client \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip opcache

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

COPY ppdb/composer.json ppdb/composer.lock ./

RUN composer install --no-dev --no-scripts --no-autoloader --prefer-dist

COPY ppdb/ .

COPY --from=node-build /app/public/js ./public/js
COPY --from=node-build /app/public/css ./public/css
COPY --from=node-build /app/public/mix-manifest.json ./public/mix-manifest.json

RUN composer dump-autoload --optimize --classmap-authoritative --no-dev

RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html \
    && chmod -R 775 storage bootstrap/cache


# =========================
# Stage 3: Production
# =========================
FROM php-base AS production

RUN apk add --no-cache nginx supervisor

RUN mkdir -p /etc/nginx/http.d
COPY docker/nginx.conf /etc/nginx/http.d/default.conf

COPY docker/php-fpm.conf /usr/local/etc/php-fpm.d/www.conf
COPY docker/supervisord.conf /etc/supervisord.conf
COPY docker/entrypoint.sh /entrypoint.sh

RUN chmod +x /entrypoint.sh

EXPOSE 80

ENTRYPOINT ["/entrypoint.sh"]
