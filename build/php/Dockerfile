FROM php:8.2.3-apache
RUN apt-get update && apt-get upgrade -y \
    docker-php-ext-install pdo pdo_mysql
RUN cp /etc/apache2/mods-available/rewrite.load /etc/apache2/mods-enabled/ \
    && cp /etc/apache2/mods-available/headers.load /etc/apache2/mods-enabled/
RUN apt-get install libicu-dev -y \
    && docker-php-ext-install intl