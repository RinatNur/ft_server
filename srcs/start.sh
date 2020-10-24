rm /etc/nginx/nginx.conf
mv ./nginx.conf /etc/nginx/nginx.conf
mkdir /var/www/your_domain
chown -R $USER:$USER /var/www/your_domain
mv ./your_domain /etc/nginx/sites-available/
ln -s /etc/nginx/sites-available/your_domain /etc/nginx/sites-enabled/
rm /etc/nginx/sites-available/default

#ssl
mkdir /etc/nginx/ssl
openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout /etc/nginx/ssl/your_domain.key -out /etc/nginx/ssl/my.crt -subj "/C=RU/ST=Moscow/L=Moscow/O=21school/OU=jheat/CN=localhost"

#start services
service nginx start
service php7.3-fpm start

#mysql
service mysql start
mysql -e "CREATE DATABASE wordpress;"
mysql -e "GRANT ALL ON wordpress.* TO 'wordpress_user'@'localhost' IDENTIFIED BY '123' WITH GRANT OPTION;"
mysql -e "FLUSH PRIVILEGES;"
mysql wordpress -u root --password= < /var/www/your_domain/wordpress.sql

#phpmyadmin
wget https://files.phpmyadmin.net/phpMyAdmin/4.9.0.1/phpMyAdmin-4.9.0.1-all-languages.tar.gz
tar xvf phpMyAdmin-4.9.0.1-all-languages.tar.gz
mv phpMyAdmin-4.9.0.1-all-languages/ /var/www/your_domain/phpmyadmin

#php
cd /tmp
curl -LO https://wordpress.org/latest.tar.gz
tar xzvf latest.tar.gz
cp -a /tmp/wordpress/. /var/www/your_domain
chown -R www-data:www-data /var/www/your_domain
cd
cd ..
mv ./wp-config.php /var/www/your_domain/
service mysql reload

bash