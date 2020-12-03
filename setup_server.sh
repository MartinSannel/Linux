#!/bin/bash

##Latest patches etc
sudo apt-get update
sudo apt-get upgrade

## Services
sudo apt-get install apache2
sudo apt-get install openssh-server
sudo apt-get install mysql-server
sudo apt install php libapache2-mod-php php-mysql
sudo apt-get install monit


## Firewall stuff
sudo ufw allow 2812 # monit
