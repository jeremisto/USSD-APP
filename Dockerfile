# Use official PHP + Apache image
FROM php:8.2-apache

# Copy your app's files to the web server directory
COPY . /var/www/html/

# Enable Apache mod_rewrite (optional, needed for pretty URLs)
RUN a2enmod rewrite
