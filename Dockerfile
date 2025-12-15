# Use the official PHP image with Apache
FROM php:8.1-apache

# Copy your app files from host to container
COPY ./var/www/html/ /var/www/html/

# Inform Docker the container listens on port 80
EXPOSE 80
