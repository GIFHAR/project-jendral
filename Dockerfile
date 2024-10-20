# Use an official PHP image with necessary extensions
FROM php:8.2-fpm

# Set working directory
WORKDIR /app

# Install system dependencies and extensions
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    libzip-dev \
    vim \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install pdo mbstring zip exif pcntl gd mysqli pdo_mysql

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Install Node.js (for building frontend assets)
RUN curl -sL https://deb.nodesource.com/setup_18.x | bash - \
    && apt-get install -y nodejs \
    && npm install npm@latest -g

# Set permissions for /app (Laravel project directory)
RUN chown -R www-data:www-data /app \
    && chmod -R 755 /app

# Copy existing application directory contents to /app
COPY . /app

# Install PHP dependencies via Composer
RUN composer install --no-interaction --prefer-dist --optimize-autoloader

# Install NPM dependencies and build frontend assets (optional)
RUN npm install && npm run build

# Expose port 9000 and start php-fpm server
EXPOSE 9000
CMD ["php-fpm"]
