FROM php:8.2-fpm-alpine
RUN apk add --no-cache nginx supervisor curl libpng-dev libxml2-dev zip
WORKDIR /var/www
COPY . /var/www
COPY ./docker/nginx.conf /etc/nginx/nginx.conf
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
RUN composer install --no-dev --optimize-autoloader
RUN chown -R www-data:www-data /var/www/storage /var/www/database
EXPOSE 80
CMD ["sh","-c","php-fpm -D && nginx -g 'daemon off;'"]