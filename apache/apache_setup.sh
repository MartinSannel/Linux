#!/bin/bash

#Updatertar till senaste programvaran
sudo apt-get update
sudo apt-get upgrade

sleep 3

sudo adduser apache_user

sleep 3

#Kollar så att Apache finns i listan bland applikationer
sudo ufw app list

sleep 3

#Aktiverar apache i brandväggen
sudo ufw allow 'Apache'

sleep 3

#Kollar så att apache aktiveras i brandväggen
sudo ufw status

sleep 3

#Kollar status på apache
sudo systemctl status apache2

sleep 3

#Kollar IP-adressen för att sedan kunna kolla så att websidan rullar
hostname -I
# I webläsaren kan man nu skriva: http://your_server_ip

sleep 3

#Slår på apache när datorn/servern startar (Påslaget från start)
sudo systemctl enable apache2

sleep 3

#Ger en användare rättigheter inom mappen där websidan lagras
sudo chown -R apache_user:apache_user /var/www/html
sudo chmod -R 755 /var/www/html

sleep 3

#Ställer in server namn osv i en .conf fil
sudo touch /etc/apache2/sites-available/linux_domain.conf
echo "<VirtualHost *:80>
    ServerAdmin webmaster@localhost
    ServerName linux_domain
    ServerAlias www.linux_domain
    DocumentRoot /var/www/linux_domain
    ErrorLog ${APACHE_LOG_DIR}/error.log
    CustomLog ${APACHE_LOG_DIR}/access.log combined
</VirtualHost>" > /etc/apache2/sites-available/linux_domain.conf

sleep 3

#Slår på så att linux_domain.conf får användning
sudo a2ensite linux_domain.conf

sleep 3

#Stänger av den defaulta .conf filen
sudo a2dissite 000-default.conf

sleep 3

#Detta komando borde ge: "Syntax OK" som svar
sudo apache2ctl configtest

sleep 3

sudo systemctl restart apache2