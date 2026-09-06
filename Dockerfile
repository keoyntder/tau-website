FROM php:8.2-apache

# Install required system dependencies, PostgreSQL drivers, and Composer
RUN apt-get update && apt-get install -y \
    libpq-dev \
    libicu-dev \
    zip \
    unzip \
    git \
    && docker-php-ext-install pdo pdo_pgsql pgsql intl

# Install Composer globally
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Enable Apache mod_rewrite for CodeIgniter clean URLs
RUN a2enmod rewrite

# Set Apache document root to CI4's public directory
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/conf-available/*.conf

# Set working directory
WORKDIR /var/www/html

# Copy project files into container
COPY . /var/www/html/

# Install PHP dependencies via Composer (optimizing for production)
RUN composer install --no-dev --optimize-autoloader

# Set proper write permissions for CodeIgniter framework
RUN chown -R www-data:www-data /var/www/html/writable

EXPOSE 80