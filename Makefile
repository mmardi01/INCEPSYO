build: crd
	@docker-compose -f srcs/docker-compose.yaml build
up:
	@docker-compose -f srcs/docker-compose.yaml up
down:
	@docker-compose -f srcs/docker-compose.yaml down
clean: rmd
	@docker-compose -f srcs/docker-compose.yaml down --volumes

crd:
	@mkdir ~/data ~/data/wp ~/data/db
rmd:
	@rm -rf ~/data