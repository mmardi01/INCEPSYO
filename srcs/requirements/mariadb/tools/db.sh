#!/bin/bash

service  mysql start

sleep 10

mysql -u root  << EOF
CREATE DATABASE IF NOT EXISTS  $DB_NAME;
CREATE USER '$DB_USER'@'%' IDENTIFIED BY '$USER_PASSWORD';
GRANT ALL PRIVILEGES ON *.* TO '$DB_USER'@'%';
ALTER USER 'root'@'localhost' IDENTIFIED BY '$ROOT_PASSWORD';
FLUSH PRIVILEGES;
EOF
sed -i 's/127.0.0.1/0.0.0.0/' etc/mysql/mariadb.conf.d/50-server.cnf
mysqladmin -u root -p$ROOT_PASSWORD shutdown 

mysqld