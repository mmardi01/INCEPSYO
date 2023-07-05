#!/bin/bash

curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar

chmod +x wp-cli.phar



./wp-cli.phar core download  --path="/var/www/html/" --allow-root

sleep 15

./wp-cli.phar config create --dbname=$DB_NAME --dbuser=$DB_USER --dbpass=$USER_PASSWORD --dbhost=$DB_HOST --path=/var/www/html/ --allow-root

./wp-cli.phar core install --url=$DOMAIN_NAME --title="Hello World" --admin_user=$ADMIN_USERNAME --admin_password=$USER_PASSWORD  --admin_email=mmardi@gmail.com --path=/var/www/html/ --allow-root

./wp-cli.phar user create $DB_USER mardi@gmail.com --role=editor --user_pass=$USER_PASSWORD --path=/var/www/html/ --allow-root

mkdir run/php

sed -i 's/listen = \/run\/php\/php7.3-fpm.sock/listen = 9000/g' /etc/php/7.3/fpm/pool.d/www.conf


echo "wordpress started" && php-fpm7.3 -F 