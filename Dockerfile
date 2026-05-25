FROM php:8.2-apache

# Install the mysqli extension needed for database connection
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

# Enable Apache mod_rewrite and AllowOverride All
RUN a2enmod rewrite && \
    sed -ri -e 's!AllowOverride None!AllowOverride All!g' /etc/apache2/apache2.conf

# Copy all local project files into the web directory of the container
COPY . /var/www/html/

# Set proper ownership and permissions for Apache to read the files
RUN chown -R www-data:www-data /var/www/html && \
    find /var/www/html -type d -exec chmod 755 {} \; && \
    find /var/www/html -type f -exec chmod 644 {} \;

# Expose port 80 for Render to route traffic
EXPOSE 80
