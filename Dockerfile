# Use official PHP image with Apache
FROM php:8.2-apache

# Set working directory
WORKDIR /var/www/html

# Install system packages and PHP extensions (PostgreSQL + Laravel needs)
RUN apt-get update && apt-get install -y \
    libpq-dev \
    unzip \
    git \
    && docker-php-ext-install pdo pdo_pgsql \
    && a2enmod rewrite \
    && rm -rf /var/lib/apt/lists/*

# Copy composer from official composer image
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Copy project files to container
COPY . .

# Install PHP dependencies without dev packages
RUN composer install --no-dev --optimize-autoloader

# Copy your Apache VirtualHost configuration
COPY ./docker/vhost.conf /etc/apache2/sites-available/000-default.conf

# Set permissions for Laravel storage and cache
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache \
    && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# Expose port 80
EXPOSE 80

# Start Apache server
CMD ["apache2-foreground"]

# Run Laravel setup tasks after container build
RUN php artisan config:clear && \
    php artisan cache:clear && \
    php artisan key:generate && \
    php artisan migrate --force || true
