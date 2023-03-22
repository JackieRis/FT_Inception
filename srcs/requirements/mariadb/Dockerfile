FROM debian:buster

EXPOSE 3306

RUN apt-get update -y && apt-get install -y mariadb-server procps

RUN mkdir -p /var/run/mysqld \
    && chown -R mysql:mysql /var/run/mysqld 

COPY ./config/50-server.cnf /etc/mysql/mariadb.conf.d/
COPY ./tools/configure.sh /

ENTRYPOINT [ "bash", "/configure.sh" ]