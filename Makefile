CONTAINERS = $(shell docker image ls -qa)
IMAGES = $(shell docker image ls -qa)
VOLUMES = $(shell docker volume ls -q)

up:
	@cd ./srcs && docker compose up

down:
	@cd ./srcs && docker compose down

clean: down
	@docker container rm -f $(CONTAINERS)
	@docker image rm -f $(IMAGES)

fclean: clean
	@docker volume rm $(VOLUMES)
