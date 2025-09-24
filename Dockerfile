# Use official PHP with Apache
FROM php:8.2-apache

# Enable required PHP extensions
RUN docker-php-ext-install pdo pdo_mysql

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Set working directory
WORKDIR /var/www/html

# Copy composer first
COPY composer.lock composer.json /var/www/html/

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Install dependencies
RUN composer install --no-dev --no-scripts --no-interaction

# Copy the rest of the application
COPY . /var/www/html

# Set Laravel storage permissions
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Run Laravel scripts
RUN php artisan config:clear && php artisan cache:clear

# Expose port 80
EXPOSE 80

# Start Apache
CMD ["apache2-foreground"]
