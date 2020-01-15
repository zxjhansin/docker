#-------------------------------------------------------------------------------
# moca/user
# 20180706
#

FROM jhansin/nginx-php-tp5:latest
MAINTAINER Jhansin <jhansin@163.com>

ADD ./src/user /usr/share/nginx/html/public/tp5/application/user
ADD ./src/default/database.php /usr/share/nginx/html/public/tp5/application/database.php
ADD ./src/default/config.php /usr/share/nginx/html/public/tp5/application/config.php
ADD ./src/composer.json /usr/share/nginx/html/public/tp5/composer.json

RUN cd /usr/share/nginx/html/public/tp5;composer config -g repo.packagist composer https://mirrors.aliyun.com/composer/;composer update
