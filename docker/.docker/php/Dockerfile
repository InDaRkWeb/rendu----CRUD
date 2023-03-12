FROM alpine:3.15.4

# Set timezone
ARG TZONE
ENV TZONE="${TZONE:-Europe/Paris}"
RUN apk add --no-cache tzdata && \
    cp /usr/share/zoneinfo/Europe/Paris /etc/localtime && \
    echo "Europe/Paris" > /etc/timezone && \
    date && \
    apk del tzdata

RUN apk add --no-cache \
    apache2 \
    composer \
    curl \
    jpegoptim \
    libjpeg-turbo-dev \
    mariadb-client \
    optipng \
    php8 \
    php8-apache2 \
    php8-bcmath \
    php8-calendar \
    php8-ctype \
    php8-curl \
    php8-dom \
    php8-exif \
    php8-fileinfo \
    php8-gd \
    php8-iconv \
    php8-intl \
    php8-json \
    php8-mbstring \
    php8-mysqli \
    php8-opcache \
    php8-openssl \
    php8-pdo \
    php8-pdo_mysql \
    php8-pecl-apcu \
    php8-pecl-imagick \
    php8-pecl-imagick-dev \
    php8-pecl-xdebug \
    php8-pgsql \
    php8-phar \
    php8-session \
    php8-simplexml \
    php8-sockets \
    php8-tokenizer \
    php8-xml \
    php8-xmlreader \
    php8-xmlwriter \
    php8-zip \
    tini \
    nodejs \
    npm

RUN ln -sf /usr/bin/php8 /usr/bin/php

COPY config/httpd.conf /etc/apache2/httpd.conf

COPY config/php.ini /etc/php8/conf.d/

EXPOSE 80

WORKDIR /var/www/html

COPY --chown=apache:apache . .

CMD [ "/sbin/tini", "--", "httpd", "-D", "FOREGROUND" ]
