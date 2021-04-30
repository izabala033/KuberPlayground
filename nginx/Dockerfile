FROM nginx

RUN apt-get update ; apt-get -y install php-fpm ;

COPY html /usr/share/nginx/html
COPY default.conf /etc/nginx/conf.d/
CMD service php7.3-fpm start && service nginx start && tail -f /dev/null
