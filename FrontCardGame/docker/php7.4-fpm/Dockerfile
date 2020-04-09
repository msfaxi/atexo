FROM php:7.4-fpm
RUN apt-get update && apt-get install -y \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libpng-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd

RUN rm -Rf /var/www/brandalley.v6/var/cache/* \
    && rm -Rf /var/www/brandalley.v6/var/logs/*

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
ADD . /var/www

WORKDIR /var/www

RUN rm -rf /var/www/var/cache/* \
    rm -rf /var/www/var/logs/* \
    rm -rf /var/www/vendor/*



