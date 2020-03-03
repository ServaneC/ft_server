#create the key and certificate for SSL
openssl req -x509 -nodes -days 365 -newkey rsa:2048 \
    -subj /C=FR/ST=IDF/L=Paris/O=42/CN=schene/ \
    -keyout /etc/ssl/private/localhost.key -out /etc/ssl/certs/localhost.crt

service nginx start
service php7.3-fpm start
service mysql start

mysql -u root -e "CREATE DATABASE wordpress"
mysql -u root -e "CREATE USER 'schene'@'localhost' IDENTIFIED BY '42born2code'"
mysql -u root -e "GRANT ALL PRIVILEGES ON wordpress. * TO 'schene'@'localhost' IDENTIFIED BY '42born2code'"
mysql -u root -e "FLUSH PRIVILEGES"

service mysql restart