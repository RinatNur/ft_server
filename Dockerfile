FROM debian:buster

RUN apt-get update

RUN apt-get -y install \
nginx \
vim \
mariadb-server \
php7.3-fpm php7.3-mysql php7.3-curl \
php7.3-gd php7.3-intl php7.3-mbstring php7.3-soap php7.3-xml php7.3-xmlrpc php7.3-zip \
wget \
curl

COPY ./srcs/start.sh ./
COPY ./srcs/nginx.conf ./
COPY ./srcs/your_domain ./
COPY ./srcs/autoindex.sh ./
COPY ./srcs/wp-config.php ./
COPY ./srcs/wordpress.sql ./var/www/your_domain/

CMD bash start.sh
EXPOSE 80 443