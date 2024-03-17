FROM php:8.2-apache
WORKDIR /var/www/html
COPY . .
RUN apt-get update
RUN apt-get install -y libpng-dev
RUN docker-php-ext-install pdo pdo_mysql gd
EXPOSE 80
CMD ["apache2-foreground"]
