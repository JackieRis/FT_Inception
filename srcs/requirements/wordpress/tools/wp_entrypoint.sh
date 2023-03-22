sleep 5

wp --allow-root --path=/var/www/wordpress config create --dbname=$WP_DATABASE_NAME --dbuser=$WP_DATABASE_USR --dbpass=$WP_DATABASE_PWD --dbhost=$MYSQL_HOST --dbprefix=$WP_PREFIX
wp --allow-root core install --path=/var/www/wordpress --url=$DOMAIN_NAME --title="$WP_TITLE" --admin_user=$WP_ADMIN_USR --admin_password=$WP_ADMIN_PWD --admin_email=$WP_ADMIN_EMAIL
wp --allow-root --path=/var/www/wordpress user create $WP_USR $WP_EMAIL --role=author --user_pass=$WP_PWD

/usr/sbin/php-fpm7.3 -F
