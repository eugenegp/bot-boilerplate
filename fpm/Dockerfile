FROM php:fpm

RUN pecl install xdebug-beta && \
docker-php-ext-enable xdebug
RUN conf=
RUN echo "env[PHP_IDE_CONFIG] = \"serverName=bot\"" >> /usr/local/etc/php-fpm.d/www.conf

RUN echo "xdebug.max_nesting_level=500" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini  && \
    echo "xdebug.remote_enable = On"  >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini  && \
    echo "xdebug.var_display_max_depth =5" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini && \
    echo "xdebug.remote_connect_back = 0" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini && \
    echo "xdebug.idekey=PHPSTORM" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini && \
    echo "xdebug.remote_host = 172.17.0.1" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini && \
    echo "xdebug.remote_autostart = 1" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \

RUN echo "" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini