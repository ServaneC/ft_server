FROM debian:buster

RUN apt-get update && apt-get upgrade && apt-get install wget nginx openssl php7.3-fpm php7.3-mysql mariadb-server -y \
&& rm -f /etc/nginx/sites-available/default

#copy of the sources
COPY srcs/default /etc/nginx/sites-available
COPY srcs/phpMyAdmin /var/www/html/
COPY srcs/wordpress /var/www/html/
COPY srcs/start.sh /home/

#giving the right to execute
RUN chmod u+x /home/start.sh

CMD sh /home/start.sh && bash

EXPOSE 8080 80 3306