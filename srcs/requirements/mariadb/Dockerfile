FROM debian:buster

RUN apt-get update
RUN apt-get install -y mariadb-server
RUN apt-get install -y procps


#CMD rm /etc/my.cnf
COPY config/50-server.cnf /etc/mysql/mariadb.conf.d/
COPY tools/configure.sh /usr/local/bin/

RUN chmod 777 /usr/local/bin/configure.sh

EXPOSE 3306

ENTRYPOINT [ "/usr/local/bin/configure.sh" ]