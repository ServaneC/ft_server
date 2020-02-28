FROM debian:buster
RUN apt-get update && apt-get upgrade \
&& apt-get install wget nginx php7.3-fpm php7.3-mysql mariadb-server mariadb-client -y \
&& apt-get clean
COPY srcs/ /var/www/html/
RUN mv -f /var/www/html/default /etc/nginx/sites-available/ \
&& mkdir /etc/nginx/ssl && mkdir /etc/nginx/ssl/localhost \
&& mv /var/www/html/*.pem /etc/nginx/ssl/localhost 
RUN service nginx start && service php7.3-fpm start && service mysql start \
&& rm -f /var/www/html/index.nginx-debian.html
RUN bash
EXPOSE 80
EXPOSE 443
