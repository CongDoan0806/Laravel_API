# Sử dụng PHP 8.2 với Apache
FROM php:8.2-apache

# Cài đặt các extension PHP cần thiết
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    zip \
    unzip \
    git \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo pdo_mysql

# Cài Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Thiết lập thư mục làm việc
WORKDIR /var/www

# Copy toàn bộ project vào container
COPY . .

# Cấp quyền cho storage
RUN chmod -R 777 storage bootstrap/cache

# Chạy lệnh khởi tạo Laravel
RUN composer install --no-dev --optimize-autoloader
RUN php artisan config:cache

# Expose cổng 8000
EXPOSE 8000

# Chạy Laravel
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
