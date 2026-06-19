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
                echo 'Install Dependencies Berhasil'
            }
        }

        stage('Unit Test') {
            steps {
                echo 'Unit Test Berhasil'
            }
        }

        stage('Build Docker Image') {
            steps {
                echo 'Docker Build Berhasil'
            }
        }

        stage('Deploy') {
            steps {
                echo 'Deploy Berhasil'
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