FROM alpine:3.12
ENV ip=192.168.99.111
RUN echo "http://dl-cdn.alpinelinux.org/alpine/edge/testing" >> /etc/apk/repositories
RUN apk update && apk add pure-ftpd openssl
RUN adduser -D wbryon && echo wbryon:12345 | chpasswd
RUN mkdir -p ftps/admin
RUN apk add openrc && openrc && touch /run/openrc/softlevel
RUN openssl req -x509 -nodes -days 365 -subj "/C=RU/ST=Tatarstan/O=School 21/CN=wbryon" \
-newkey rsa:4096 -keyout /etc/ssl/private/pure-ftpd.pem -out /etc/ssl/private/pure-ftpd.pem
RUN chmod 600 /etc/ssl/private/pure-ftpd.pem
COPY start.sh /
EXPOSE 21 21000
ENTRYPOINT sh start.sh
