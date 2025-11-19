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
                    sh """
                    docker build -t ppdb-app .
                    """
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

                    echo 'Waiting for DB...'
                    sh "sleep 15"

                    echo 'Laravel setup in container...'
                    sh "docker compose exec -T db bash -c 'mysql -uroot -ppassword -e \"CREATE DATABASE IF NOT EXISTS ppdb\"'"
                    sh "docker compose exec -T app composer install --no-dev --prefer-dist"
                    sh "docker compose exec -T app php artisan key:generate --force"
                    sh "docker compose exec -T app php artisan migrate --force"
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
