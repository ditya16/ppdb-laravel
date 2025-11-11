# Multi-stage build untuk Laravel PPDB Application

# Stage 1: Build assets dengan Node.js
FROM node:16-alpine AS node-build

WORKDIR /app

# Copy package files
COPY ppdb/package.json ./
COPY ppdb/package-lock.json* ./

# Install dependencies (termasuk dev dependencies untuk build)
# Gunakan --legacy-peer-deps untuk menghindari peer dependency issues
RUN if [ -f package-lock.json ]; then \
        npm ci --legacy-peer-deps; \
    else \
        npm install --legacy-peer-deps; \
    fi

# Copy source files untuk build
COPY ppdb/resources ./resources
COPY ppdb/webpack.mix.js ./

# Build assets
RUN npm run production

# Stage 2: PHP dengan Composer
FROM php:8.0-fpm-alpine AS php-base

# Install system dependencies dan PHP extensions
RUN apk add --no-cache \
    git \
    curl \
    libpng-dev \
    libzip-dev \
    zip \
    unzip \
    oniguruma-dev \
    mysql-client \
    && docker-php-ext-install \
    pdo_mysql \
    mbstring \
    exif \
    pcntl \
    bcmath \
    gd \
    zip \
    opcache

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www/html

# Copy composer files
COPY ppdb/composer.json ppdb/composer.lock ./

# Install PHP dependencies (tanpa dev dependencies untuk production)
RUN composer install --no-dev --no-scripts --no-autoloader --prefer-dist

# Copy application files
COPY ppdb/ .

# Copy built assets dari node-build stage
COPY --from=node-build /app/public/js ./public/js
COPY --from=node-build /app/public/css ./public/css
COPY --from=node-build /app/public/mix-manifest.json ./public/mix-manifest.json

# Complete composer autoload
RUN composer dump-autoload --optimize --classmap-authoritative --no-dev

# Set permissions untuk Laravel
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html \
    && chmod -R 775 /var/www/html/storage \
    && chmod -R 775 /var/www/html/bootstrap/cache

# Stage 3: Production dengan PHP-FPM dan Nginx
FROM php-base AS production

# Install Nginx
RUN apk add --no-cache nginx supervisor

# Copy custom nginx configuration
RUN mkdir -p /etc/nginx/http.d
COPY docker/nginx.conf /etc/nginx/http.d/default.conf

# Copy PHP-FPM configuration
COPY docker/php-fpm.conf /usr/local/etc/php-fpm.d/www.conf

# Copy supervisor configuration
COPY docker/supervisord.conf /etc/supervisord.conf

# Copy entrypoint script
COPY docker/entrypoint.sh /entrypoint.sh
RUN chmod +x /entrypoint.sh

# Expose port
EXPOSE 80

# Use entrypoint script
ENTRYPOINT ["/entrypoint.sh"]

