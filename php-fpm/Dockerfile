###########################################################################
# PHP-FPM Version Of Alpine:
###########################################################################
FROM php:7.2-fpm-alpine

LABEL maintainer="Jhansin <jhansin@163.com>"

###########################################################################
# System Extensions:
###########################################################################

RUN apk --update add \
        autoconf \
        build-base \
        linux-headers \
        libaio-dev \
        zlib-dev \
        curl \
        git \
        freetype-dev \
        libjpeg-turbo-dev \
        libmcrypt-dev \
        libpng-dev \
        libtool \
        libbz2 \
        bzip2 \
        bzip2-dev \
        libstdc++ \
        libxslt-dev \
        openldap-dev \
        imagemagick-dev \
        make \
        unzip \
        wget \
        libmemcached-dev


###########################################################################
# PHP Core Extensions:
###########################################################################

# Core Extensions For Default Installation:
RUN docker-php-ext-install \
        bcmath \
        pdo_mysql \
        mysqli \
        sockets \
    && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-install gd



RUN docker-php-ext-install pcntl 
RUN docker-php-ext-install opcache 



###########################################################################
# PHP PECL Extensions:
###########################################################################


RUN pecl install redis-4.3.0 \
    && rm -rf /tmp/pear \
    && docker-php-ext-enable redis \


RUN pecl install mongodb-1.5.4 \
    && rm -rf /tmp/pear \
    && docker-php-ext-enable mongodb \


RUN pecl install memcached-3.1.2 \
    && rm -rf /tmp/pear \
    && docker-php-ext-enable memcached \

RUN pecl install swoole-4.2.13 \
    && rm -rf /tmp/pear \
    && docker-php-ext-enable swoole \

RUN curl -sS http://getcomposer.org/installer | php \
    && mv ./composer.phar /usr/local/bin/composer \
    && composer config -g repo.packagist composer https://mirrors.aliyun.com/composer \


RUN apk del build-base \
    	linux-headers \
    	libaio-dev \
    && rm -rf /var/cache/apk/*


VOLUME /var/www
WORKDIR /var/www


EXPOSE 9000
CMD ["php-fpm"]