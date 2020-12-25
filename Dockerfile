FROM php:8.0-alpine

ENV COMPOSER_HOME="/tmp/composer"

COPY --from=composer:2.0.7 /usr/bin/composer /usr/bin/composer

RUN set -x \
    && apk add --no-cache git \
    && mkdir /src ${COMPOSER_HOME} \
    && ln -s /usr/bin/composer /usr/bin/c \
    && composer --version \
    && php -v \
    && php -m

WORKDIR /src
