FROM php:7.3-apache

LABEL maintainer="Akash Sarkar"
COPY . .
WORKDIR /var/www/html