FROM debian:buster

RUN apt-get update
RUN apt-get install -y curl
RUN apt-get install -y php7.3 php7.3-fpm php7.3-mysql php7.3-curl php7.3-gd php7.3-intl php7.3-mbstring php7.3-soap php7.3-xml php7.3-xmlrpc php7.3-zip

COPY conf/conf.sh /conf.sh

RUN chmod +x conf.sh

EXPOSE 9000

ENTRYPOINT [ "./conf.sh" ]