pipeline {
    agent any

    stages {
        stage('Checkout') {
            steps {
                sh '''
                rm -rf *
                git clone https://github.com/anurajyellurkar/airline_reservation_devops.git .
                '''
            }
        }

        stage('Build & Deploy') {
            steps {
                sh '''
                docker rm -f airline || true
                docker build --no-cache -t airline-app .
                docker run -d -p 80:80 --name airline --link mysql-db:mysql-db airline-app
                '''
            }
        }
    }
}
