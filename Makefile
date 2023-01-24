start:
	php artisan serve --host 0.0.0.0

setup:
	composer install
	cp -n .env.example .env
	php artisan key:gen --ansi
	touch database/database.sqlite
	php artisan migrate:refresh
	php artisan db:seed
	npm install
	npm run build
	make ide-helper

watch:
	npm run watch

migrate:
	php artisan migrate

console:
	php artisan tinker

log:
	tail -f storage/logs/laravel.log

test:
	php artisan test

lint:
	composer phpcs

lint-fix:
	composer phpcbf

test-coverage:
	XDEBUG_MODE=coverage php artisan test --coverage-clover build/logs/clover.xml

install:
	composer install

validate:
	composer validate

ci:
	npm ci

build-front:
	npm run build

compose:
	./vendor/bin/sail up

compose-test:
	./vendor/bin/sail run laravel.test make test

compose-bash:
	./vendor/bin/sail run laravel.test bash

compose-setup: compose-build
	./vendor/bin/sail run laravel.test make setup

compose-make-setup:
	./vendor/bin/sail run laravel.test make setup

compose-build:
	./vendor/bin/sail build

compose-db:
	./vendor/bin/sail exec pgsql psql -U postgres

compose-down:
	./vendor/bin/sail down -v

ide-helper:
	php artisan ide-helper:eloquent
	php artisan ide-helper:gen
	php artisan ide-helper:meta
	php artisan ide-helper:mod -n
