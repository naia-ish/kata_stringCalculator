FROM php:8.0-fpm

RUN apt-get update -y && apt-get upgrade -y

# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin/ --filename=composer

RUN apt-get install libpq-dev -y

RUN docker-php-ext-install pdo_pgsql && \
    pecl install xdebug && \
    docker-php-ext-enable xdebug

RUN apt-get install zip -y && \
    apt-get install git -y && \
    apt-get install yarn -y && \
    apt-get install bash -y && \
    apt-get install nano -y

ARG UID=1000
ARG GID=1000

RUN usermod www-data -u ${UID} \
    && groupmod -g ${GID} www-data

RUN chown www-data:www-data /var/www