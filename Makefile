install:
	composer install

autoload:
	composer dump-autoload

beauty:
	composer exec 'phpcbf --standard=PSR2 src bin'

lint:
	composer exec 'phpcs --standard=PSR2 src tests'

test:
	composer exec 'phpunit tests'
