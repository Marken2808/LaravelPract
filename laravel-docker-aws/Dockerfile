FROM php:8.0.0-fpm-alpine


RUN set -ex \
  && apk --no-cache add \
    postgresql-dev

RUN docker-php-ext-install pdo pdo_pgsql && docker-php-ext-enable pdo_pgsql

