# Используем официальный образ PHP с Apache
FROM php:8.2-apache

# Устанавливаем необходимые зависимости
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libzip-dev \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libpq-dev \
    && docker-php-ext-install pdo_mysql zip mbstring exif pcntl bcmath gd

# Устанавливаем Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Копируем исходный код приложения
COPY . /var/www/html

# Устанавливаем права на запись для папок storage и bootstrap/cache
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Устанавливаем рабочую директорию
WORKDIR /var/www/html

# Устанавливаем зависимости Composer
RUN composer install --optimize-autoloader --no-dev

# Включаем mod_rewrite для Apache
RUN a2enmod rewrite

# Копируем конфигурацию Apache
COPY ./docker/apache.conf /etc/apache2/sites-available/000-default.conf

# Открываем порт 80
EXPOSE 80