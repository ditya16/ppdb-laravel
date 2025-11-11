#!/bin/bash

set -e

# Check if running in non-interactive mode (for CI/CD)
NON_INTERACTIVE=${1:-false}
RUN_SEEDERS=${2:-false}
USE_FRESH=${3:-false}

echo "🚀 Setting up Laravel PPDB..."

# Check if containers are running
echo "📦 Checking containers..."
if ! docker compose ps | grep -q "ppdb-laravel-app.*Up"; then
    echo "❌ Container ppdb-laravel-app is not running!"
    echo "Please run: docker compose up -d"
    exit 1
fi

# Check if .env exists
if [ ! -f "ppdb/.env" ]; then
    echo "⚠️  File ppdb/.env not found!"
    if [ "$NON_INTERACTIVE" = "true" ]; then
        echo "❌ .env file is required but not found. Exiting..."
        exit 1
    else
        echo "Creating from template..."
        if [ -f "env-template.txt" ]; then
            cp env-template.txt ppdb/.env
            echo "✅ Created ppdb/.env from template"
        fi
        echo "⚠️  Please edit ppdb/.env and set your configuration!"
        read -p "Press enter to continue after editing .env..."
    fi
fi

# Generate APP_KEY
echo "📝 Generating APP_KEY..."
docker exec ppdb-laravel-app php artisan key:generate --force || echo "⚠️  APP_KEY might already be set"

# Set permissions
echo "🔐 Setting permissions..."
docker exec ppdb-laravel-app chown -R www-data:www-data /var/www/html/storage
docker exec ppdb-laravel-app chmod -R 775 /var/www/html/storage
docker exec ppdb-laravel-app chmod -R 775 /var/www/html/bootstrap/cache

# Wait for database to be ready
echo "⏳ Waiting for database..."
sleep 5

# Run migrations
if [ "$USE_FRESH" = "true" ]; then
    echo "📊 Running fresh migrations (will drop all existing tables)..."
    if [ "$NON_INTERACTIVE" = "true" ]; then
        docker exec ppdb-laravel-app php artisan migrate:fresh --force || echo "⚠️  Migration might have failed, check logs"
    else
        read -p "⚠️  This will DELETE all existing data! Continue? (y/n) " -n 1 -r
        echo
        if [[ $REPLY =~ ^[Yy]$ ]]; then
            docker exec ppdb-laravel-app php artisan migrate:fresh --force || echo "⚠️  Migration might have failed, check logs"
        else
            echo "⏭️  Skipping migrations..."
        fi
    fi
else
    echo "📊 Running migrations..."
    docker exec ppdb-laravel-app php artisan migrate --force || echo "⚠️  Migration might have failed, check logs"
fi

# Run seeders
if [ "$RUN_SEEDERS" = "true" ]; then
    echo "🌱 Running seeders..."
    docker exec ppdb-laravel-app php artisan db:seed --force
elif [ "$NON_INTERACTIVE" = "false" ]; then
    read -p "Do you want to run seeders? (y/n) " -n 1 -r
    echo
    if [[ $REPLY =~ ^[Yy]$ ]]; then
        echo "🌱 Running seeders..."
        docker exec ppdb-laravel-app php artisan db:seed --force
    fi
fi

# Clear and cache
echo "🧹 Clearing cache..."
docker exec ppdb-laravel-app php artisan config:clear
docker exec ppdb-laravel-app php artisan cache:clear
docker exec ppdb-laravel-app php artisan route:clear
docker exec ppdb-laravel-app php artisan view:clear

# Cache for production
echo "💾 Caching for production..."
docker exec ppdb-laravel-app php artisan config:cache
docker exec ppdb-laravel-app php artisan route:cache
docker exec ppdb-laravel-app php artisan view:cache

echo ""
echo "✅ Setup complete!"
echo ""
echo "📋 Next steps:"
echo "1. Check your .env file: ppdb/.env"
echo "2. Update APP_URL to match your domain"
echo "3. Access your application at: http://your-server-ip:8000"
echo ""
echo "🔍 Check logs: docker logs ppdb-laravel-app"
echo "🔍 Check status: docker compose ps"

