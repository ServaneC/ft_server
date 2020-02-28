FROM debian:buster
RUN apt-get update && apt-get upgrade \
&& apt-get install wget nginx php7.3-fpm php7.3-mysql mariadb-server mariadb-client -y \
&& apt-get clean
COPY srcs/ /var/www/html/
RUN mv -f /var/www/html/default /etc/nginx/sites-available/ \
&& mkdir /etc/nginx/ssl \ && mv /var/www/html/*.pem /etc/nginx/ssl/
RUN bash
EXPOSE 80
EXPOSE 443
