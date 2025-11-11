#!/bin/bash

set -e

echo "🚀 Starting deployment..."

# Go to the repository
cd ~/repo/ppdb-laravel

echo "📥 Pulling latest code..."
git pull origin main

echo "🐳 Stopping containers..."
docker-compose down

echo "🔨 Building containers..."
docker-compose build --no-cache

echo "🚀 Starting containers..."
docker-compose up -d

echo "⏳ Waiting for containers to be ready..."
sleep 10

echo "📊 Running database migrations..."
docker exec ppdb-laravel-app php artisan migrate --force || true

echo "🧹 Clearing Laravel cache..."
docker exec ppdb-laravel-app php artisan config:cache
docker exec ppdb-laravel-app php artisan route:cache
docker exec ppdb-laravel-app php artisan view:cache

echo "✅ Deployment completed successfully!"

