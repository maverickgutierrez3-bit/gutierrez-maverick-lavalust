ARG PHP_VERSION=8.5

FROM php:${PHP_VERSION}-apache

# Install PDO MySQL and mysqli
RUN docker-php-ext-install pdo pdo_mysql mysqli

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Allow .htaccess overrides globally
RUN sed -i '/<Directory \/var\/www\/>/,/<\/Directory>/ s/AllowOverride None/AllowOverride All/' /etc/apache2/apache2.conf

# Copy application files
COPY . /var/www/html/

# Set working directory
WORKDIR /var/www/html

# Fix permissions
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

EXPOSE 80