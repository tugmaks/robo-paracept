.DEFAULT_GOAL := help

mkfile_path := $(abspath $(lastword $(MAKEFILE_LIST)))
current_dir := $(dir $(mkfile_path))

help:
	@echo "Use this makefile to execute your tests in correct php version"
	@echo "\tr.php-8.2\t\trun Tests with PHP 8.2"
	@echo "\tr.php-8.3\t\trun Tests with PHP 8.3"
	@echo "\tr.php-8.4\t\trun Tests with PHP 8.4"

r.php-8.2:
	docker build -t robo:php-8.2 --build-arg PHP_VERSION=8.2 docker
	docker run --rm -v $(current_dir):/app -w /app robo:php-8.2 composer install
	docker run --rm -v $(current_dir):/app -w /app robo:php-8.2 composer test

r.php-8.3:
	docker build -t robo:php-8.3 --build-arg PHP_VERSION=8.3 docker
	docker run --rm -v $(current_dir):/app -w /app robo:php-8.3 composer install
	docker run --rm -v $(current_dir):/app -w /app robo:php-8.3 composer test

r.php-8.4:
	docker build -t robo:php-8.4 --build-arg PHP_VERSION=8.4 docker
	docker run --rm -v $(current_dir):/app -w /app robo:php-8.4 composer install
	docker run --rm -v $(current_dir):/app -w /app robo:php-8.4 composer test