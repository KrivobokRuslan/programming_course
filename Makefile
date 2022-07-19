.PHONY: local-up
local-up:
	@if [ ! -e docker/local/.env ]; then cp docker/local/.env-example docker/local/.env; fi
	@if [ ! -e docker/local/data/logs/php/error.log ]; then touch docker/local/data/logs/php/error.log; fi
	@if [ ! -e docker/local/data/logs/nginx/access.log ]; then touch docker/local/data/logs/nginx/access.log docker/local/data/logs/nginx/error.log; fi
	docker-compose -f docker-compose.yml --env-file ./docker/local/.env up -d

.PHONY: local-down
local-down:
	docker-compose -f docker-compose.yml --env-file ./docker/local/.env down

.PHONY: local-clear
local-clear:
	sudo rm -rf  ${PWD}/docker/local/data/lock/php-dev.lock
	sudo rm -rf  ${PWD}/docker/local/data/lock/php-test.loc
	sudo rm -rf  ${PWD}/docker/local/data/db/mysql/*
	sudo rm -rf  ${PWD}/docker/local/data/logs/nginx/*
	sudo rm -rf  ${PWD}/docker/local/data/logs/php/*
	sudo rm -rf  ${PWD}/docker/local/data/php_session/*
