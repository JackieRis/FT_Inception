#!/bin/bash

# Set the database root password
if [ -n "$MYSQL_ROOT_PWD" ]; then
  mysqladmin password "$MYSQL_ROOT_PWD"
fi

# Create a new database user
if [ -n "$WP_DATABASE_USR" ] && [ -n "$WP_DATABASE_PWD" ]; then
  mysql -e "CREATE USER '$WP_DATABASE_USR'@'%' IDENTIFIED BY '$WP_DATABASE_PWD';" && \
  mysql -e "GRANT ALL PRIVILEGES ON *.* TO '$WP_DATABASE_USR'@'%';" && \
  mysql -e "FLUSH PRIVILEGES;"
  mysql -e "ALTER USER 'root'@'localhost' IDENTIFIED BY '${MYSQL_ROOT_PWD}';" > db.sql
fi

service mysql start && mysql < db.sql

# Start the MariaDB server
exec /usr/bin/mysqld_safe --datadir="/var/lib/mysql"