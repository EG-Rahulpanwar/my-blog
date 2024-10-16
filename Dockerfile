# Use the official PHP image with Apache
FROM php:8.1-apache

# Copy your project files into the container
COPY . /var/www/html/

# Set the working directory
WORKDIR /var/www/html/

# Enable Apache rewrite module
RUN a2enmod rewrite

# Expose port 80
EXPOSE 80
