build:
	@sudo docker-compose -f srcs/docker-compose.yaml build
up:
	@sudo docker-compose -f srcs/docker-compose.yaml up
down:
	@sudo docker-compose -f srcs/docker-compose.yaml down
clean: rmd
	@sudo docker-compose -f srcs/docker-compose.yaml down --volumes

crd:
	@mkdir /home/mmardi/data /home/mmardi/data/wp /home/mmardi/data/db
rmd:
	@sudo rm -rf   /home/mmardi/data