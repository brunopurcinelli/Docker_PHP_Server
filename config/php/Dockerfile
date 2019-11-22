#FROM php:7.2.7-fpm-alpine3.7
#RUN apk update; \
#    apk upgrade;
#RUN docker-php-ext-install mysqli

FROM php:7.2.2-apache

# Use the default production configuration
#RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"
RUN docker-php-ext-install mysqli
# Override with custom opcache settings
#COPY config/opcache.ini $PHP_INI_DIR/conf.d/
