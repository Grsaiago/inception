# Edit the variables from here

USER = gsaiago

WPVOLUMEPATH = /home/$(USER)/data/wordpress

MDBVOLUMEPATH = /home/$(USER)/data/mariadb

# To here

CONTAINERS = $(shell docker image ls -qa)
IMAGES = $(shell docker image ls -qa)
VOLUMES = $(shell docker volume ls -q)
COMPOSES = $(shell docker compose ls -qa)

# UP
ifneq ($(strip "$(COMPOSES)"), "")
up:
	@echo "Nothing to be done: there's a compose running"
else
up:
	@echo "Creating the dirs if they don't exist"
	@mkdir -p $(WPVOLUMEPATH)
	@mkdir -p $(MDBVOLUMEPATH)
	@echo "There's no compose running, starting now..."
	@cd ./srcs && docker compose up
endif

# DOWN
ifneq ($(strip "$(COMPOSES)"), "")
down: 
	@echo "Downing the running compose"
	@cd ./srcs && docker compose down
else
down:
	@echo "Nothing to be done: there are no composes to down";
endif

# CLEAN IMAGES 
ifneq ($(strip "$(IMAGES)"), "")
clean-images:
	@echo "Removing images...";
	@docker image rm -f $(IMAGES)
else
clean-images:
	@echo "Nothing to be done: there are no images";
endif

# CLEAN VOLUMES 
ifneq ($(strip "$(VOLUMES)"), "")
clean-volumes:
	@echo "Removing volumes"
	@docker volume rm $(VOLUMES)
	@echo "Deleting host folder content"
	@rm -rf /home/gsaiago/data/wordpress/*
	@sudo rm -rf /home/gsaiago/data/mariadb/*
else
clean-volumes:
	@echo "Nothing to be done: there are no volumes";

endif

fclean: down clean-images clean-volumes

.PHONY: up down clean-images clean-volumes fclean
