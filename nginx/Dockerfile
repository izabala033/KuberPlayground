FROM nginx

RUN apt-get update ; apt-get -y install php-fpm ; apt-get -y install php-pgsql

COPY html /usr/share/nginx/html/
COPY www.conf /etc/php/7.3/fpm/pool.d/
COPY php.ini /etc/php/7.3/fpm/
COPY default.conf /etc/nginx/conf.d/
CMD /etc/init.d/php7.3-fpm start && nginx -g 'daemon off;'
