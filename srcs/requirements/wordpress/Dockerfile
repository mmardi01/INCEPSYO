FROM debian:buster

RUN apt-get update &&  apt-get install php-mysqli curl mariadb-server php-fpm -y

COPY tools/wp.sh .

RUN chmod +x wp.sh

CMD ["./wp.sh"]  