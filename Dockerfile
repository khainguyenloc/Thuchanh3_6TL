# Dùng môi trường PHP 8.2 kết hợp với máy chủ Apache
FROM php:8.2-apache

# Cài đặt các thư viện lõi của Linux cần cho Laravel
RUN apt-get update && apt-get install -y \
    libpng-dev libonig-dev libxml2-dev zip unzip

# Cài đặt các extension PHP cần thiết
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Bật tính năng URL rewrite của Apache
RUN a2enmod rewrite

# Tải và cài đặt Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Thiết lập thư mục làm việc
WORKDIR /var/www/html

# Copy toàn bộ code vào máy chủ
COPY . .

# Chạy Composer để cài đặt thư viện (thêm --no-scripts để tránh lỗi khi chưa có file .env)
RUN composer install --optimize-autoloader --no-dev --no-scripts

# Cấp quyền cho Laravel ghi file
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Trỏ thư mục gốc của web vào thư mục /public của Laravel
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

EXPOSE 80
