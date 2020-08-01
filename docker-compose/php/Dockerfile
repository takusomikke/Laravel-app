FROM php:7.4-fpm
COPY ./docker-compose/php/php.ini /usr/local/etc/php/

ARG user
ARG uid

RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    vim \
    sudo \
    libzip-dev \
    nodejs \
    npm

RUN apt-get clean && rm -rf /var/lib/apt/lists/*

RUN docker-php-ext-install zip pdo_mysql mbstring exif pcntl bcmath gd

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN useradd -G www-data,root -u $uid -d /home/$user $user
RUN mkdir -p /home/$user/.composer && \
    chown -R $user:$user /home/$user

RUN apt-get update && apt-get install libmagickwand-dev -y --no-install-recommends \
    && pecl install imagick \
    && docker-php-ext-enable imagick

USER $user
WORKDIR /var/www

RUN composer global require laravel/installer
ENV PATH $PATH:/home/$user/.composer/vendor/bin

# RUN laravel new .
