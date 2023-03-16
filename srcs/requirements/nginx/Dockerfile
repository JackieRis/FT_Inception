FROM debian:buster

RUN apt-get update -y && apt-get install -y nginx openssl

RUN mkdir /etc/nginx/ssl
RUN openssl req -newkey rsa:4096 -x509 -sha256 -days 365 \
	-nodes -out /etc/nginx/ssl/jackieriz.crt \
	-keyout /etc/nginx/ssl/jackieriz.key \
	-subj "/C=FR/ST=Paris/L=Paris/O=42 School/OU=jackieriz/CN=jackieriz.42.fr"

COPY ./conf/default /etc/nginx/conf.d/nginx.conf
RUN ln -s /etc/nginx/conf.d/nginx.conf /etc/nginx/sites-enabled/

RUN mkdir -p /run/nginx

EXPOSE 443

CMD ["nginx", "-g", "daemon off;"]