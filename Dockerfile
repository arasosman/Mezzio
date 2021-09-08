#
# Use this dockerfile to run api-tools.
#

# To install the Redis extension.
FROM phpswoole/swoole:4.6-php7.4-alpine

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer &&\
    chmod +x /usr/local/bin/composer

WORKDIR /var/www

CMD tail -F /var/log/as.c