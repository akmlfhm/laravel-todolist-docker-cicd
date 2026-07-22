FROM php:8.3-fpm-alpine

WORKDIR /var/www/html

# Dependency sistem untuk extension PHP yang dibutuhkan Laravel
RUN apk add --no-cache \
    bash \
    git \
    curl \
    libpng-dev \
    libzip-dev \
    oniguruma-dev \
    mysql-client \
    $PHPIZE_DEPS \
    && docker-php-ext-install pdo pdo_mysql mbstring zip gd bcmath \
    && apk del $PHPIZE_DEPS

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Copy dependency files dulu supaya layer cache composer install lebih efisien
COPY composer.json composer.lock ./
RUN composer install --no-dev --no-scripts --no-autoloader --prefer-dist

# Copy seluruh source code aplikasi
COPY . .

RUN composer dump-autoload --optimize \
    && php artisan config:clear

# Set permission untuk storage & cache Laravel
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache \
    && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

COPY docker/entrypoint.sh /usr/local/bin/entrypoint.sh
RUN chmod +x /usr/local/bin/entrypoint.sh

EXPOSE 9000

ENTRYPOINT ["entrypoint.sh"]
CMD ["php-fpm"]
