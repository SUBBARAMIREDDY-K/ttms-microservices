# base public image
FROM php:8.1.1-apache
COPY ./ /var/www/html
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf
RUN echo "Listen 5000" >> /etc/apache2/ports.conf
#install the mysqli module
RUN docker-php-ext-install mysqli
EXPOSE 80