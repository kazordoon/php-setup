FROM php:7.4-apache
COPY apache-conf /etc/apache2
RUN apt update\
  && apt upgrade -y \
  && apt install libicu-dev -y \
  && docker-php-ext-install pdo pdo_mysql intl
