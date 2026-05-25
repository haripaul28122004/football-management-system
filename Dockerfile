FROM php:8.2-apache

# Install the mysqli extension needed for database connection
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

# Disable other MPMs and force mpm_prefork to prevent "More than one MPM loaded" error
RUN (a2dismod mpm_event || true) && \
    (a2dismod mpm_worker || true) && \
    a2enmod mpm_prefork

# Enable Apache mod_rewrite and AllowOverride All
RUN a2enmod rewrite && \
    sed -ri -e 's!AllowOverride None!AllowOverride All!g' /etc/apache2/apache2.conf

# Set a default PORT (can be overridden by hosting platforms like Railway/Render)
ENV PORT=80

# Configure Apache to listen on the dynamic $PORT environment variable
RUN sed -i "s/Listen 80/Listen \${PORT}/g" /etc/apache2/ports.conf && \
    sed -i "s/<VirtualHost \*:80>/<VirtualHost *:\${PORT}>/g" /etc/apache2/sites-available/000-default.conf

# Copy all local project files into the web directory of the container
COPY . /var/www/html/

# Set proper ownership and permissions for Apache to read the files
RUN chown -R www-data:www-data /var/www/html && \
    find /var/www/html -type d -exec chmod 755 {} \; && \
    find /var/www/html -type f -exec chmod 644 {} \;

# Expose the dynamic port
EXPOSE ${PORT}
