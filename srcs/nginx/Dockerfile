FROM alpine:3.12
COPY nginx.conf index.html start.sh probe.sh ./
RUN apk update
RUN apk add openssh nginx openssl openrc vim
RUN mkdir -p /run/nginx www && mv nginx.conf /etc/nginx/ && mv index.html /www/
RUN openssl req -x509 -nodes -days 365 -newkey rsa:4096 -keyout /etc/ssl/wbryon.key \
 -out /etc/ssl/wbryon.crt -subj "/C=RU/ST=Tatarstan/L=Kazan/O=school21/CN=wbryon"
RUN ssh-keygen -A && adduser -D wbryon && echo "wbryon:12345" | chpasswd
COPY ./index.html /var/www/
VOLUME ["/sys/fs/cgroup/"]
EXPOSE 22 80 443
ENTRYPOINT sh start.sh
