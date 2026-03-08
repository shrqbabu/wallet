FROM php:8.2-apache

COPY . /var/www/html/

ENV PORT=80
EXPOSE 80
