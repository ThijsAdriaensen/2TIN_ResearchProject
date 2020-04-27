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
                sh 'cd /var/lib/jenkins/workspace/SNB5_Pipeline && composer install'
            }
        }
        stage('Test') {
            steps {
                echo 'Running Tests'
            }
        }
        stage('Deploy') {
            steps {
                sh 'sudo cp -r SNB5_Pipeline /var/www/html'
            }
        }
    }
}