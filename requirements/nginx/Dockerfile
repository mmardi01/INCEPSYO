FROM debian:buster

RUN apt update && apt install nginx -y

COPY tools/nginx.conf /etc/nginx/conf.d/

CMD ["nginx", "-g", "daemon off;"]