FROM php:7.4-apache

LABEL key="Bruce Lu <bruce.lu@luxiaoyou.com>"

ARG PHP_VER_NUM=7.4.33
ARG WEB_ROOT=/var/www/html

ADD ./php-${PHP_VER_NUM}.tar.gz ${WEB_ROOT}

WORKDIR ${WEB_ROOT}/php-${PHP_VER_NUM}/ext/mysqli

RUN /usr/local/bin/phpize \
    && ./configure \
    && make \
    && make install \
    && echo 'extension=mysqli' > /usr/local/etc/php/conf.d/docker-php-ext-mysqli.ini \
    && rm ${WEB_ROOT}/* -rvf

WORKDIR ${WEB_ROOT}