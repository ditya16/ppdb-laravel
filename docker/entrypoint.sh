#!/bin/sh
set -e

echo "Waiting for database..."

until php -r "
try {
    new PDO('mysql:host=' . getenv('DB_HOST') . ';port=' . getenv('DB_PORT'),
    getenv('DB_USERNAME'), getenv('DB_PASSWORD'));
    exit(0);
} catch (Exception \$e) {
    exit(1);
}
"; do
  echo "DB not ready, sleeping..."
  sleep 2
done

echo "Database ready."

if [ "$AUTO_MIGRATE" = "true" ]; then
  echo "Running migrations..."
  php artisan migrate --force

  if [ "$AUTO_SEED" = "true" ]; then
    echo "Running seeders..."
    php artisan db:seed --force
  fi
fi

php-fpm -D
sleep 2
exec nginx -g "daemon off;"
