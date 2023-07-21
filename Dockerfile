FROM php:7.1.23-apache
#COPY maps/ /var/www/html/
COPY . /var/www/html
WORKDIR /var/www/html
EXPOSE 80
#CMD ["apache2-foreground"]
ENTRYPOINT echo "ServerName 127.0.0.1:80" >> /etc/apache2/apache2.conf && a2enmod rewrite && service apache2 restart && apache2ctl stop && apache2ctl -D FOREGROUND
