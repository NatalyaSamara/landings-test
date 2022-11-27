FROM php:8.1-fpm

ADD ./docker/config/php/www.conf /usr/local/etc/php-fpm.d/www.conf

RUN addgroup --gid 1000 laravel && adduser --ingroup laravel --shell /bin/bash --disabled-password laravel

RUN mkdir -p /var/www/html

RUN chown laravel:laravel /var/www/html

WORKDIR /var/www/html

RUN docker-php-ext-install pdo pdo_mysql
