pipeline {
    agent any

    environment {
        CACHE_DIR = "/var/lib/jenkins/docker-cache"
    }

    stages {

        stage('Prepare Cache') {
            steps {
                script {
                    sh """
                    mkdir -p ${CACHE_DIR}
                    """
                }
            }
        }

        stage('Checkout') {
            steps {
                checkout scm
            }
        }

        stage('Docker Build (with Cache)') {
            steps {
                script {
                    echo "Building Docker image with cache..."

                    sh """
                    docker buildx build \
                        --cache-from=type=local,src=${CACHE_DIR} \
                        --cache-to=type=local,dest=${CACHE_DIR} \
                        -t ppdb-app .
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
