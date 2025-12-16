pipeline {
    agent any

    stages {

        stage('Checkout') {
            steps {
                sh '''
                git reset --hard
                git clean -fd
                git pull origin main
                '''
            }
        }

        stage('Build Image') {
            steps {
                sh '''
                docker build --no-cache -t airline-app .
                '''
            }
        }

        stage('Deploy Container') {
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
