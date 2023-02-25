FROM php:8.2.3-apache
RUN apt-get update && apt-get upgrade -y
RUN docker-php-ext-install pdo pdo_mysql
EXPOSE 80
