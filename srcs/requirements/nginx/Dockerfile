FROM debian:buster

RUN apt update && apt install nginx openssl -y

RUN mkdir /etc/nginx/ssl

RUN openssl req -x509 -nodes -newkey rsa:2048 -keyout /etc/nginx/ssl/mykey.key -out /etc/nginx/ssl/myser.csr -days 365  -subj "/C=MO/"

COPY tools/nginx.conf /etc/nginx/conf.d/

CMD ["nginx", "-g", "daemon off;"] 