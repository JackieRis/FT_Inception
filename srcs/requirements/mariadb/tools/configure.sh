#!/bin/bash

service mysql start

mysql -hlocalhost <<EOF
CREATE DATABASE IF NOT EXISTS ${WP_DATABASE_NAME};
CREATE USER IF NOT EXISTS ${WP_DATABASE_USR}@'%' IDENTIFIED BY '${WP_DATABASE_PWD}';
GRANT ALL PRIVILEGES ON ${WP_DATABASE_NAME}.* TO jackieriz@'%';
FLUSH PRIVILEGES;
EOF

service mysql stop

/usr/bin/mysqld_safe
