sudo cp /etc/monit/conf-available/apache2 /etc/monit/conf-enabled/apache2
sudo cp /etc/monit/conf-available/mysql /etc/monit/conf-enabled/mysql
sudo cp /etc/monit/conf-available/openssh-server /etc/monit/conf-enabled/openssh-server
sudo touch /var/run/mysqld/mysqld.pid
sudo chown mysql:mysql /var/run/mysqld/mysqld.pid
printf "pid-file    = /var/run/mysqld/mysqld.pid" >> /etc/mysql/my.cnf
printf "set httpd port 2812 and\n    use address localhost\n    allow seb:frodin" >> /etc/monit/monitrc
