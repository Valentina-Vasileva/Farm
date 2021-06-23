lint:
	composer phpcs

lint-fix:
	composer phpcbf

setup:
	composer install
	
start:
	php bin/main.php
