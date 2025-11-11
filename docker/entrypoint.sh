#!/bin/sh

set -e

echo "Waiting for database connection..."

# Wait for database to be ready
until php -r "try { new PDO('mysql:host=${DB_HOST:-db};port=${DB_PORT:-3306}', '${DB_USERNAME:-root}', '${DB_PASSWORD:-password}'); exit(0); } catch (PDOException \$e) { exit(1); }" 2>/dev/null; do
  echo "Database is unavailable - sleeping"
  sleep 2
done

echo "Database is up - executing commands"

# Run migrations (hanya jika AUTO_MIGRATE=true)
if [ "${AUTO_MIGRATE:-false}" = "true" ]; then
    echo "Running database migrations..."
    php artisan migrate --force
    
    # Run seeders jika AUTO_SEED=true
    if [ "${AUTO_SEED:-false}" = "true" ]; then
        echo "Running database seeders..."
        php artisan db:seed --force
    fi
fi

# Start PHP-FPM in background
php-fpm -D

# Wait for PHP-FPM to start
sleep 2

# Start Nginx
exec nginx -g "daemon off;"

