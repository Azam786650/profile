# Start from PHP 8.2 with Apache
FROM php:8.2-apache

# Install system packages and PHP extensions
RUN apt-get update && \
    apt-get install -y zip unzip libzip-dev libpq-dev && \
    docker-php-ext-install pdo pdo_mysql pdo_pgsql zip

# Enable Apache rewrite module
RUN a2enmod rewrite

# Set working directory
WORKDIR /var/www/html

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Copy composer files first and install PHP dependencies
COPY composer.json composer.lock ./
RUN composer install --no-dev --no-interaction --prefer-dist --ignore-platform-reqs || true

# Copy the rest of the application code
COPY . /var/www/html

# Fix permissions for Laravel storage and cache
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Expose port 80 and start Apache
EXPOSE 80
CMD ["apache2-foreground"]
