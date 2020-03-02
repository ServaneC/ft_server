FROM debian:buster

RUN apt-get update && apt-get upgrade && apt-get install wget nginx openssl php7.3-fpm -y && rm -f /etc/nginx/sites-available/default

COPY srcs/default /etc/nginx/sites-available/

#generate key and ssl ccertificate
RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048 \
    -subj /C=FR/ST=IDF/L=Paris/O=42/CN=schene/ \
    -keyout /etc/ssl/private/nginx-selfsigned.key -out /etc/ssl/certs/nginx-selfsigned.crt

RUN service nginx start

EXPOSE 80
EXPOSE 443