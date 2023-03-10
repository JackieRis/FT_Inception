#!/bin/ash

curl -0 curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar

php wp-cli.phar --info

chmod +x wp-cli.phar

mv wp-cli.phar /usr/local/bin/wp

wp core download --path=wpclidemo.dev

wp db create

wp plugin update --all

wp super-admin add $WP_ADMIN_USR --user_pass=$WP_ADMIN_PWD

wp user add $WP_USR --user_pass=$WP_PWD --role=author

tail -f /dev/null