ROOT_DIR = $(shell dirname $(realpath $(lastword $(MAKEFILE_LIST))))

APP_NAME = Landings test

SHELL ?= /bin/bash
ARGS = $(filter-out $@,$(MAKECMDGOALS))

IMAGE_TAG = latest
IMAGE_NAME = example/landings

.SILENT: ;               # no need for @
.ONESHELL: ;             # recipes execute in same shell
.NOTPARALLEL: ;          # wait for this target to finish
.EXPORT_ALL_VARIABLES: ; # send all vars to shell
Makefile: ;              # skip prerequisite discovery

# Run make help by default
.DEFAULT_GOAL = help

.PHONY: build
build:
	docker build \
		-t $(IMAGE_NAME):$(IMAGE_TAG) \
		--no-cache \
		--force-rm .

.PHONY: up
up: ## Starts and attaches to containers for a service
	docker-compose up -d

.PHONY: down
down: ## Stop and kill containers
	docker-compose down

.PHONY: start
start: ## Start containers.
	docker-compose start

.PHONY: stop
stop: ## Stop containers.
	docker-compose stop

.PHONY: prune
prune:
	docker-compose down --volumes --rmi all

.PHONE: exec
exec: ## Exec command in the Application container
	docker-compose exec php $(ARGS)

.PHONY: bash
bash: ## Exec bash inside app container
	docker-compose exec php bash

.PHONY: composer
composer:
	composer install --ignore-platform-reqs

.PHONY: migrate
migrate:
	docker-compose exec php php artisan migrate --seed

.PHONY: test
test:
	docker-compose exec php ./vendor/bin/phpunit

.PHONY: help
help: ## Show this help and exit (default target)
	echo ''
	printf "                     %s: \033[94m%s\033[0m \033[90m[%s] [%s]\033[0m\n" "Usage" "make" "target" "ENV_VARIABLE=ENV_VALUE ..."
	echo ''
	echo '                     Available targets:'
	# Print all commands, which have '##' comments right of it's name.
	# Commands gives from all Makefiles included in project.
	# Sorted in alphabetical order.
	echo '                     ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━'
	grep -hE '^[a-zA-Z. 0-9_-]+:.*?## .*$$' $(MAKEFILE_LIST) | sort | \
		 awk 'BEGIN {FS = ":.*?## " }; {printf "\033[36m%+20s\033[0m: %s\n", $$1, $$2}'
	echo '                     ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━'
	echo ''

%:
	@:
