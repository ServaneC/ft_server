FROM debian:buster

RUN apt-get update && apt-get upgrade && apt-get install wget nginx openssl php7.3-fpm php7.3-mysql mariadb-server -y \
&& rm -f /etc/nginx/sites-available/default /var/www/html/index.nginx-debian.html

#copy of the sources
COPY srcs /var/www/html/
RUN mv /var/www/html/default /etc/nginx/sites-available/ \
&& mv /var/www/html/start.sh /home/ && chmod u+x /home/start.sh

CMD sh /home/start.sh && bash

EXPOSE 8080 80 443
