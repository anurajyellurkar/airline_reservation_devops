pipeline {
    agent any

    stages {

        stage('Checkout Code') {
            steps {
                git branch: 'main',
                    url: 'https://github.com/anurajyellurkar/airline_reservation_devops.git'
            }
        }

        stage('Build Docker Image') {
            steps {
                sh '''
                docker build --no-cache -t airline-app .
                '''
            }
        }

        stage('Deploy Application') {
            steps {
                sh '''
                docker rm -f airline || true

                docker run -d \
                --name airline \
                --network airline-net \
                -p 80:80 \
                airline-app
                '''
            }
        }
    }
}
