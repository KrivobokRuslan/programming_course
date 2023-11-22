FROM php:8.2-fpm as php-fpm

ARG XDEBUG_CLIENT_HOST=host.docker.internal
RUN echo "XDEBUG_CLIENT_HOST = ${XDEBUG_CLIENT_HOST}"
LABEL maintainer="Course"
WORKDIR /var/www/html/course
COPY ./ .