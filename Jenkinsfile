// Jenkinsfile
pipeline {
    agent any

    stages {
        stage('Checkout') {
            steps {
                checkout scm
            }
        }

        stage('Build & Deploy with Docker Compose') {
            steps {
                script {
                    echo 'Stopping and cleaning up previous deployment...'
                    sh "docker compose down" 

                    echo 'Building Docker images...'
                    sh "docker compose build"

                    echo 'Starting containers in detached mode...'
                    sh "docker compose up -d"

                    // Memberi waktu DB untuk startup
                    sh "sleep 15" 

                    // Eksekusi perintah setup Laravel di container 'app'
                    // Ganti 'app' dengan nama service PHP/App jika berbeda di docker-compose.yml
                    echo 'Running migrations and key generation...'
                    
                    // Pastikan Database 'ppdb' ada di service 'db'
                    sh "docker compose exec -T db bash -c 'mysql -uroot -ppassword -e \"CREATE DATABASE IF NOT EXISTS ppdb\"'"
                    
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
            echo 'Deployment Berhasil! Aplikasi dapat diakses.'
        }
        failure {
            echo 'Deployment GAGAL. Cek log Jenkins.'
        }
    }
}
