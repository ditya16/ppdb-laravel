# Gunakan image PHP + Apache
FROM php:8.2-apache

# Install dependensi PHP dan Composer
RUN apt-get update && apt-get install -y \
    zip unzip git curl && \
    docker-php-ext-install pdo pdo_mysql

# Copy semua file project ke container
COPY . /var/www/html

# Set working directory
WORKDIR /var/www/html

# Install dependency Laravel via Composer
RUN curl -sS https://getcomposer.org/installer | php && \
    php composer.phar install --no-dev --optimize-autoloader

# Set permission folder Laravel
RUN chmod -R 775 storage bootstrap/cache

# Expose port 80 (Apache)
EXPOSE 80

# Jalankan Apache
CMD ["apache2-foreground"]

