FROM debian:buster

EXPOSE 9000

RUN mkdir /var/www/
RUN mkdir -p /var/run/ && mkdir /run/php

RUN apt-get update -y && apt-get install -y php7.3 php-mysqli php-fpm wget mariadb-client wget curl sendmail

RUN curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar && \
	chmod +x wp-cli.phar && \
	mv wp-cli.phar /usr/local/bin/wp

RUN cd /var/www/ && wget http://fr.wordpress.org/latest-fr_FR.tar.gz && \
	mkdir /var/www/wordpress && tar -xzvf latest-fr_FR.tar.gz && rm latest-fr_FR.tar.gz

#COPY ./config/wp-config.php /var/www/wordpress/wp-config.php
COPY ./tools/wp_entrypoint.sh /
COPY ./config/www.conf /etc/php/7.3/fpm/pool.d/www.conf

RUN chown -Rv www-data: /var/www/

WORKDIR /var/www/wordpress

ENTRYPOINT [ "bash", "/wp_entrypoint.sh" ]