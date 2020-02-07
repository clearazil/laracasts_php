FROM php:7.4-apache
RUN apt update
RUN apt install nano
RUN docker-php-ext-install pdo pdo_mysql
RUN mkdir /app
COPY .docker/vhosts.conf /etc/apache2/sites-available/000-default.conf
WORKDIR /app
RUN chown -R www-data:www-data /app && a2enmod rewrite