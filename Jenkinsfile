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
                //
            }
        }
        stage('Test') {
            steps {
                //
            }
        }
        stage('Deploy') {
            steps {
                sh 'sudo cp -r <> /var/www/html'
            }
        }
    }
}