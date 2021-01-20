# CoffeePid Project

## Configuration

copy app/config-*.php.dist to app/config-*.php
For example copy app/config-default.php.dist to app/config-default.php
Adjust configuration. config-default.php will be loaded every time. config-*.php will be loaded depending on environment variable is set.

copy Docker/.env.dist to Docker/.env
Adjust configuration to .env file!

## Build

From root directory

`make docker-build-start` for building images from scratch and rebuilding

`make docker-start` for bringing up docker-sync and the container

From 'Docker' directory

`docker-sync start`

`docker-compose up --build -d`

## ToDo
- Entity generator from XML
- Transfer generator from XML or JSON
- Facade resolver
- Since autowiring from php-di is not used, maybe switch to pimple
- Sevice and service resolver
