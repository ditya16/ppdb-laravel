pipeline {
    agent any

    stages {
        stage('Clone Repository') {
            steps {
                git branch: 'main', url: 'https://github.com/ditya16/ppdb-laravel.git'
            }
        }

        stage('Deploy to Debian Server') {
            steps {
                sshPublisher(publishers: [
                    sshPublisherDesc(
                        configName: 'debian-aditya',
                        transfers: [
                            sshTransfer(
                                execCommand: '''
cd /var/www

# Hapus folder lama kalau ada
rm -rf ppdb-laravel

# Clone repository terbaru
git clone https://github.com/ditya16/ppdb-laravel.git
cd ppdb-laravel

# Build Docker image
docker build -t ppdb-laravel .

# Hapus container lama kalau masih ada
docker rm -f ppdb-laravel || true

# Jalankan container baru
docker run -d -p 8000:80 --name ppdb-laravel ppdb-laravel
'''
                            )
                        ]
                    )
                ])
            }
        }
    }
}

