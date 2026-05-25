FROM php:8.2-apache

# Install the mysqli extension needed for database connection
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

# Copy all local project files into the web directory of the container
COPY . /var/www/html/

# Expose port 80 for Render to route traffic
EXPOSE 80
