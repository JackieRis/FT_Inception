FROM debian:buster

EXPOSE 3306

ARG WP_DATABASE_NAME
ARG WP_DATABASE_USR
ARG WP_DATABASE_PWD
ARG MYSQL_ROOT_PWD

RUN apt-get update -y && apt-get install -y mariadb-server

RUN mkdir -p /var/run/mysqld \
    && chown -R mysql:mysql /var/run/mysqld 

COPY ./config/50-server.cnf /etc/mysql/mariadb.conf.d/

RUN	echo "CREATE DATABASE IF NOT EXISTS ${WP_DATABASE_NAME}; \
    CREATE USER ${WP_DATABASE_USR}@'%' IDENTIFIED BY '${WP_DATABASE_PWD}'; \
    GRANT ALL ON ${WP_DATABASE_NAME}.* TO jackieriz@'%'; \
    FLUSH PRIVILEGES; \
    ALTER USER 'root'@'localhost' IDENTIFIED BY '${MYSQL_ROOT_PWD}';" > db.sql

RUN	service mysql start && mysql < db.sql

CMD ["/usr/bin/mysqld_safe"]