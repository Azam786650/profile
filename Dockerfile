FROM php:8.2-apache

# Install system dependencies & PHP extensions
RUN apt-get update \
    && apt-get install -y \
        zip \
        unzip \
        libzip-dev \
        libpq-dev \        # <-- Needed for PostgreSQL
    && docker-php-ext-install \
        pdo \
        pdo_mysql \
        pdo_pgsql \
        zip

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Set working directory
WORKDIR /var/www/html

# Install composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Copy composer files and install dependencies
COPY composer.json composer.lock ./
RUN composer install --no-dev --no-interaction --prefer-dist --ignore-platform-reqs

# Copy application code
COPY . /var/www/html

# Set permissions for Laravel
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Clear Laravel caches
RUN php artisan config:clear || true && php artisan cache:clear || true

EXPOSE 80
CMD ["apache2-foreground"]
