FROM debian:buster
RUN apt-get update && apt-get upgrade && apt-get install php7.3-fpm php7.3-mysql mariadb-server mariadb-client -y && apt-get clean 
RUN bash
EXPOSE 80
EXPOSE 443