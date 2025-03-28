# 1️⃣ Chọn image PHP + Apache
FROM php:8.2-apache

# 2️⃣ Cài đặt extensions cần thiết cho Laravel
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    zip \
    unzip \
    git \
    curl \
    && docker-php-ext-install pdo pdo_mysql gd

# 3️⃣ Cài Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# 4️⃣ Copy mã nguồn Laravel vào container
WORKDIR /var/www/html
COPY . .

# 5️⃣ Cài đặt quyền và thư mục storage
RUN chmod -R 777 storage bootstrap/cache

# 6️⃣ Cài đặt dependencies Laravel
RUN composer install --no-dev --optimize-autoloader

# 7️⃣ Cấu hình Apache
RUN echo "<VirtualHost *:80>
    DocumentRoot /var/www/html/public
    <Directory /var/www/html/public>
        AllowOverride All
        Require all granted
    </Directory>
</VirtualHost>" > /etc/apache2/sites-available/000-default.conf

RUN a2enmod rewrite

# 8️⃣ Chạy Laravel bằng Apache
CMD ["apache2-foreground"]
