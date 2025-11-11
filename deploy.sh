#!/bin/bash

set -e

echo "🚀 Starting deployment..."

# Go to the repository
cd ~/repo/ppdb-laravel

echo "📥 Pulling latest code..."
git pull origin main

echo "🐳 Stopping containers..."
docker compose down

echo "🔨 Building containers..."
docker compose build --no-cache

echo "🚀 Starting containers..."
docker compose up -d

echo "⏳ Waiting for containers to be ready..."
sleep 10

# Run setup script (non-interactive mode, no fresh, no seeders)
# Parameters: non-interactive=true, run-seeders=false, use-fresh=false
echo "🔧 Running setup script..."
chmod +x quick_setup.sh
./quick_setup.sh true false false

echo "✅ Deployment completed successfully!"

