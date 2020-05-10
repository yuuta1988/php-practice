FROM php:7.2-fpm
COPY php.ini /usr/local/etc/php/
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
RUN apt-get update \
    && apt-get install -y libzip-dev zlib1g-dev \
    && docker-php-ext-install zip
