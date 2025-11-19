pipeline {
    agent any

    stages {

        stage('Checkout') {
            steps {
                checkout scm
            }
        }

        stage('Docker Build') {
            steps {
                script {
                    echo "Building Docker image..."
                    sh "docker build -t ppdb-app ."
                }
            }
        }

        stage('Deploy') {
            steps {
                script {
                    echo 'Stopping old containers...'
                    sh "docker compose down"

                    echo 'Starting new containers...'
                    sh "docker compose up -d"

                    echo 'Waiting for DB to be healthy...'
                    sh """
                    until [ "\$(docker inspect --format='{{.State.Health.Status}}' ppdb-laravel-db)" = "healthy" ]; do
                        echo "Waiting for MySQL..."
                        sleep 5
                    done
                    """

                    echo 'Laravel setup in container...'
                    # Copy .env dari .env.example sebelum generate key
                    sh "docker compose exec -T app cp /var/www/html/.env.example /var/www/html/.env || true"

                    # Install composer dependencies
                    sh "docker compose exec -T app composer install --no-dev --prefer-dist"

                    # Generate Laravel key
                    sh "docker compose exec -T app php artisan key:generate --force"

                    # Run migrations
                    sh "docker compose exec -T app php artisan migrate --force"

                    # Clear cache & views
                    sh "docker compose exec -T app php artisan cache:clear"
                    sh "docker compose exec -T app php artisan view:clear"
                }
            }
        }
    }

    post {
        success {
            echo 'Deployment berhasil!'
        }
        failure {
            echo 'Deployment GAGAL. Cek log Jenkins.'
        }
    }
}
