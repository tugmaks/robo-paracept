ARG PHP_VERSION=8.2
FROM php:${PHP_VERSION}-cli AS base
COPY --from=composer /usr/bin/composer /usr/bin/composer

RUN apt update \
    && apt upgrade -y \
    && apt install -y apt-utils libxml2-dev libzip-dev
RUN docker-php-ext-install dom xml zip