#######################Git Setup####################################
Access git account
create repositry public-access and paste code here
select repositry=>setting=>Webhooks=>Add webhook=>Payload URL(http://15.206.153.88:8080/github-webhook/)=>Which events would you like to trigger this webhook?(Let me select individual events.)=>Pull requests,Pushes=>Add webhook



Create VM

#!/bin/bash

# User and password setup
USERNAME="amit"
PASSWORD="Amit@12345"

# Install SSH server if not already installed
sudo apt-get update
sudo apt-get install -y openssh-server

# Create user 'amit' and set password 'Amit@12345'
sudo useradd -m -s /bin/bash $USERNAME
echo "$USERNAME:$PASSWORD" | sudo chpasswd

# Allow SSH password authentication
sudo sed -i 's/#PasswordAuthentication yes/PasswordAuthentication yes/' /etc/ssh/sshd_config
#ChallengeResponseAuthentication yes
sudo echo "ChallengeResponseAuthentication yes" > /etc/ssh/sshd_config
sudo systemctl restart ssh

# Provide sudo permissions to 'amit' user
echo "$USERNAME ALL=(ALL) NOPASSWD:ALL" | sudo tee /etc/sudoers.d/$USERNAME
sudo chmod 0440 /etc/sudoers.d/$USERNAME
##############################  jenkins Setup ###########################
cd /Document
chmod 400 jenkins.pem
ssh -i jenkins.pem ubuntu@18.208.137.53
sudo apt update
sudo hostnamectl set-hostname jenkins
/bin/bash

#!/bin/bash
   sudo apt update -y
   wget -O - https://packages.adoptium.net/artifactory/api/gpg/key/public | sudo tee /etc/apt/keyrings/adoptium.asc
   echo "deb [signed-by=/etc/apt/keyrings/adoptium.asc] https://packages.adoptium.net/artifactory/deb $(awk -F= '/^VERSION_CODENAME/{print$2}' /etc/os-release) main" | sudo tee /etc/apt/sources.list.d/adoptium.list
   sudo apt update -y
   sudo apt install temurin-17-jdk -y
   /usr/bin/java --version
   curl -fsSL https://pkg.jenkins.io/debian-stable/jenkins.io-2023.key | sudo tee /usr/share/keyrings/jenkins-keyring.asc > /dev/null
   echo deb [signed-by=/usr/share/keyrings/jenkins-keyring.asc] https://pkg.jenkins.io/debian-stable binary/ | sudo tee /etc/apt/sources.list.d/jenkins.list > /dev/null
   sudo apt-get update -y
   sudo apt-get install jenkins -y
   sudo systemctl start jenkins
   sudo systemctl status jenkins

Access on Browser: jenkins-Server-ip:8080
sudo cat /var/lib/jenkins/secrets/initialAdminPassword

Dashboard=>New Item=>Name(Automated-Pipeline)=>Freestyle project=>create
Source Code Management=>Git=>Repository URL=>Branch Specifier(*/main)=>Build Triggers(GitHub hook trigger for GITScm)=>save

# Test 1
# Check build by pilpeline


##############################  Sonarqube Setup ###########################
cd /Document
chmod 400 sonar.pem
ssh -i sonar.pem ubuntu@18.208.137.53
sudo apt update
sudo hostnamectl set-hostname sonarqube
/bin/bash

sudo apt install docker.io  # Install Docker
sudo chmod 666 /var/run/docker.sock  # Grant access to Docker socket
docker run -d -p 9000:9000 sonarqube:lts-community  # Run SonarQube container
docker ps  # Status Runing SonarQube container
docker ps -a  # Status All SonarQube container

#Access SonarQube and Configure SonarQube
http://<sonarqube-server-publicIP>:9000

# Initial Login
Default username: admin
Default password: admin

How do you want to create your project?=>Manually=>Project display name(Website1)=>Project key(Website1)>Main branch name(main)=>setup

How do you want to analyze your repository?=>With jenkins=>Select your DevOps platform(Github)=>Configure Analysis=> Continue=>Continue=>Create a Jenkinsfile(other(for html,PHP,...))=>copy (sonar.projectKey=Website1)=>Finish this tutorial

go on top right side click on Administrator=>My Account=>Security=>Generate Tokens=>Name(sonarqube-token)=>Type(for all(Global Analysis Token)/for single project(Project Analysis Token))=>Expire in (for requirement(No expiration))=>Generate=>Copy Token

##############################  jenkins Plugin Setup ###########################
Dashboard=>Manage jenkins=>Manage plugins=>Available Plugins=>SonarQube Scanner, SSH2 Easy=>Install without restart 

Dashboard=>Manage jenkins=>Tools=>SonarQube Scanner=>Add SonarQube Scanner=>SonarQube Scanner installations=>Name (SonarQube Scanner)=>Install automatically=>save

Dashboard=>Manage jenkins=>System Configuration=>System=>SonarQube installations=>Add SonarQube=>SonarQube servers=>Name(Sonar-Server)=>URL(http://15.206.153.88:9000)=>save

Dashboard=>Select pipeline=>configuration=>Build Steps=>Execute SonarQube Scanner=>Analysis properties(sonar.projectKey=Website1)=>save

Dashboard=>Manage jenkins=>System Configuration=>SonarQube servers=>Server authentication token=>Add=>jenkins=>Add Credentials=>kind(Secret text)=>ID(sonar-token)=>Description(sonar-token)=>Add=>Select sonar-token=>save


##############################  Docker Client VM Setup ###########################
cd /Document
chmod 400 sonar.pem
ssh -i sonar.pem ubuntu@18.208.137.53
sudo apt update
sudo hostnamectl set-hostname docker
/bin/bash

sudo apt install docker.io  # Install Docker
sudo chmod 666 /var/run/docker.sock  # Grant access to Docker socket
docker run -d -p 9000:9000 sonarqube:lts-community  # Run SonarQube container
docker ps  # Status Runing SonarQube container
docker ps -a  # Status All SonarQube container

# Provide access on Docker to jenkins server passwordless
vim /etc/ssh/sshd_config
#uncomment
PublicAuthentication yes
#change PasswordAuth
PasswordAuthentication yes

Systemctl restart sshd
usermod -aG docker ubuntu
newgrp docker
passwd root # Password

# Create SSh key on jenkin VM
ssh-keygen
ssh-copy-id ubuntu@Docker-server-ip
ssh ubuntu@Docker-server-ip #Access Check

#####################  jenkins  Setup  for docker vm########
Dashboard=>Manage jenkins=>System Configuration=> Server Group Center=>Server Group List=>Add=>Group Name(Docker-servers)=>User Name (Root)=>Password(Password)=>save

Dashboard=>Manage jenkins=>System Configuration=> Server List=>Server Group(Docker-servers)=>Server Name (Docker VM1)=>Server IP (Docker Server-ip)=>save

Dashboard=>select pipeline=>configure=>Add build Step=>Remote Shell=>Select Target Server(Docker Vm1)=>Shell(echo Hello > test.txt)=>save

##################### Github #############################
Add Dockerfile in Repositry
# Use the official Apache base image
FROM httpd:latest

# Copy your website files to the Apache document root
# By default, the document root is /usr/local/apache2/htdocs/
COPY ./* /usr/local/apache2/htdocs/

# Expose port 80 for the web server
EXPOSE 80

# Start Apache when the container runs
CMD ["httpd-foreground"]


#Now Check build is runing or not
Jenkins=>Select pipeline=>configure=> If any build step present kindly remove it then Add build=>execute shell(scp -r ./* root@docker-server-ip:~/website/)=>save
# If you are using same VM for Jenkins and Docker
Jenkins=>Select pipeline=>configure=> If any build step present kindly remove it then Add build=>execute shell(scp -r ./* /website/)=>save

# For Create Docker image and Create container
Jenkins=>Select pipeline=>configure=> Add build step=>Remote shell(cd /tmp/website, docker build -t mywebsite ., docker run -d -p 8085:80 --name=web1 mywebsite)=>save
###############################ON Docker Server#####################
 vim /etc/ssh/sshd_config

PermitRootLogin yes
PasswordAuthentication yes
ChallengeResponseAuthentication yes


sudo systemctl restart ssh
