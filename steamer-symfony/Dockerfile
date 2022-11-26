FROM alpine:3.16

RUN apk add --no-cache zip unzip curl \
    && apk add bash \
    && apk --no-cache upgrade

# Installing PHP
RUN apk add --no-cache php8 \
    php8-common \
    php8-fpm \
    php8-pdo \
    php8-opcache \
    php8-zip \
    php8-phar \
    php8-iconv \
    php8-cli \
    php8-curl \
    php8-ctype \
    php8-openssl \
    php8-mbstring \
    php8-tokenizer \
    php8-fileinfo \
    php8-json \
    php8-xml \
    php8-xmlwriter \
    php8-simplexml \
    php8-dom \
    php8-pdo_mysql \
    php8-pdo_sqlite \
    php8-tokenizer \
    php8-pecl-redis

# Installing composer
RUN curl -sS https://getcomposer.org/installer -o composer-setup.php \
    && php composer-setup.php --install-dir=/usr/local/bin --filename=composer \
    && rm -rf composer-setup.php \
    && apk add --no-cache bash \
    && curl -sS https://get.symfony.com/cli/installer | bash

WORKDIR /app/

COPY . .

COPY entrypoint.sh /usr/local/bin/

RUN composer update \
    && composer install

EXPOSE 80

ENTRYPOINT ["/usr/local/bin/entrypoint.sh"]




