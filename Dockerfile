# extensions: php -m or php -i / fpm-alpine
FROM php:fpm

COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

