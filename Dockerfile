# Use official PHP image with Apache
FROM php:8.2-apache

# Enable Apache mod_rewrite (for Laravel or clean URLs)
RUN a2enmod rewrite

# Copy project files into container
COPY . /var/www/html/

# Set working directory
WORKDIR /var/www/html

# Install required PHP extensions (common ones)
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Set proper permissions
RUN chown -R www-data:www-data /var/www/html

# Expose port 80
EXPOSE 80

# Start Apache server
CMD ["apache2-foreground"]
