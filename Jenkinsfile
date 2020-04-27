pipeline {
    agent any
    stages {
        stage('Build') {
            steps {
                echo 'Building Application'
                checkout(
                [$class: 'GitSCM', branches: [[name: '*/master']],
                    doGenerateSubmoduleConfigurations: false,
                    extensions: [],
                    submoduleCfg: [],
                    userRemoteConfigs: [[url: 'https://github.com/ThijsAdriaensen/2TIN_ResearchProject']]]
                )
            }
        }
        stage('Build Dependencies') {
            steps {
                echo 'Building Dependencies'
                sh 'php --version'
                sh 'mysql --version'
                sh 'apache2 --version'
                sh 'composer --version'
                sh 'java --version'
            }
        }
        stage('Test') {
            steps {
                echo 'Running Tests'
            }
        }
        stage('Deploy') {
            steps {
                sh 'sudo cp -r <> /var/www/html'
            }
        }
    }
}