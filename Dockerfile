FROM debian:buster
RUN apt-get update && apt-get upgrade \
&& apt-get -y wget nginx php7.3-fmp php7.3-mysql mariadb-server mariadb-client \
&& rm /etc/nginx/sites-available/default
COPY srcs/ var/www/html
EXPOSE 80
EXPOSE 443