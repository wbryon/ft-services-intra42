FROM alpine:3.12
RUN apk update
RUN apk add nginx openssl openrc && mkdir /run/nginx;
RUN apk add wget php7-common php7-iconv php7-json php7-gd php7-curl \
php7-xml php7-mysqli php7-imap php7-cgi fcgi php7-pdo php7-pdo_mysql \
php7-ctype php7-dom php php-fpm php-session php-mbstring php-gettext \
php7-soap php7-xmlrpc php7-posix php7-mcrypt php7-gettext php7-ldap
RUN openssl req -newkey rsa:4096 -x509 -sha256 -days 365 -nodes \
	-out /etc/ssl/certs/wbryon.crt -keyout /etc/ssl/private/wbryon.key \
	-subj "/C=RU/ST=Tattarstan/L=Kazan/O=21School/OU=Education/CN=wbryon"
COPY nginx.conf /etc/nginx/conf.d/
COPY config.inc.php .
COPY probe.sh /
COPY start.sh .
RUN mkdir -p /usr/share/webapps/
RUN set -x ; addgroup -g 74 -S www-data ; adduser -u 74 -D -S -G www-data www-data && exit 0 ; exit 1
WORKDIR /usr/share/webapps
RUN wget https://files.phpmyadmin.net/phpMyAdmin/5.1.0/phpMyAdmin-5.1.0-english.tar.gz && \
tar zxvf phpMyAdmin-5.1.0-english.tar.gz && mv phpMyAdmin-5.1.0-english phpmyadmin && \
mv /config.inc.php /usr/share/webapps/phpmyadmin && rm phpMyAdmin-5.1.0-english.tar.gz
WORKDIR /
VOLUME ["/sys/fs/cgroup/"]
EXPOSE 5000
ENTRYPOINT sh start.sh
