#!/bin/bash

curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar

chmod +x wp-cli.phar

mkdir /var/www/html/

mv wp-cli.phar /usr/local/bin/wp 

wp core download  --path="/var/www/html/" --allow-root

sleep 15

wp config create --dbname=$DB_NAME --dbuser=$DB_USER --dbpass=$USER_PASSWORD --dbhost=$DB_HOST --path=/var/www/html/ --allow-root

wp core install --url=localhost --title="Hello World" --admin_user=$ADMIN_USERNAME --admin_password=$USER_PASSWORD  --admin_email=mmardi@gmail.com --path=/var/www/html/ --allow-root

wp user create $DB_USER mardi@gmail.com --role=author --user_pass=$USER_PASSWORD --path=/var/www/html/ --allow-root

mkdir run/php

sed -i 's/listen = \/run\/php\/php7.3-fpm.sock/listen = 9000/g' /etc/php/7.3/fpm/pool.d/www.conf


echo "wordpress started" && php-fpm7.3 -F 