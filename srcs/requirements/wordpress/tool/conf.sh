#!/bin/bash

if [ ! -d "/var/www/wordpress" ]; then
	cp -r /tmp/wordpress /var/www
	chown -Rv www-data: /var/www/
	sleep 10
	sudo -u jackieriz -i -- wp wp core installation
	sudo -u jackieriz -i -- wp core install --path=/var/www/wordpress --url=$DOMAIN_NAME --title=$WP_TITLE --admin_user=$WP_ADMIN_USR --admin_password=$WP_ADMIN_PWD --admin_email=$WP_ADMIN_EMAIL
	sudo -u jackieriz -i -- wp --path=/var/www/wordpress user create $WP_USR $WP_EMAIL --role=author --user_pass=$WP_PWD
	fi

php-fpm7.4 -F