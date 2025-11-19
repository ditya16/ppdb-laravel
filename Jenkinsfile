pipeline {
    agent any

    stages {
        stage('Checkout') {
            steps {
                checkout scm
            }
        }

        stage('Docker Build & Deploy') {
            steps {
                script {
                    echo 'Stopping old containers...'
                    sh "docker compose down"

                    echo 'Starting new containers...'
                    sh "docker compose up -d --build"

                    echo 'Waiting for MySQL to be healthy...'
                    sh """
                    until [ "\$(docker inspect --format='{{.State.Health.Status}}' ppdb-laravel-db)" = "healthy" ]; do
                        echo "Waiting for MySQL..."
                        sleep 5
                    done
                    """

                    echo 'Setting up Laravel...'
                    sh """
                    # Copy .env jika belum ada
                    docker compose exec -T app sh -c 'cp -n /var/www/html/.env.example /var/www/html/.env || true'

                    # Install composer dependencies
                    docker compose exec -T app composer install --no-dev --prefer-dist

                    # Generate Laravel app key
                    docker compose exec -T app php artisan key:generate --force

                    # Run migrations
                    docker compose exec -T app php artisan migrate --force

                    # Clear cache & views
                    docker compose exec -T app php artisan cache:clear
                    docker compose exec -T app php artisan view:clear
                    """
                }
            }
        }
    }

    post {
        success { echo 'Deployment berhasil!' }
        failure { echo 'Deployment GAGAL. Cek log Jenkins.' }
    }
}
