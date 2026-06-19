pipeline {
    agent any

    stages {

        stage('Clone Repository') {
    steps {
        git branch: 'main',
        url: 'https://github.com/ibnurestoe/php-app-5167.git'
    }
}

        stage('Install Dependencies') {
            steps {
                sh 'composer install'
            }
        }

        stage('Unit Test') {
            steps {
                sh 'vendor/bin/phpunit tests'
            }
        }

        stage('Build Docker Image') {
            steps {
                sh 'docker build -t php-app .'
            }
        }

        stage('Deploy') {
            steps {
                sh '''
                docker stop php-app-container || true
                docker rm php-app-container || true

                docker run -d \
                --name php-app-container \
                -p 8000:8000 \
                php-app
                '''
            }
        }
    }

    post {

        success {
            echo 'Pipeline Berhasil'
        }

        failure {
            echo 'Pipeline Gagal'
        }
    }
}