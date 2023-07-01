FROM debian:buster

RUN apt-get update && apt-get install mariadb-server -y

COPY tools/db.sh .

RUN chmod +x db.sh

CMD  ["./db.sh"] 