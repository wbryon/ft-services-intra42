FROM alpine:3.12
RUN apk update
RUN apk add --no-cache vim mysql mysql-client openrc
COPY my.cnf /etc/mysql.cnf
COPY mariadb-server.cnf /etc/my.cnf.d/mariadb-server.cnf
COPY wordpress.sql .
VOLUME ["/var/lib/mysql"]
VOLUME ["/sys/fs/cgroup/"]
COPY start.sh .
EXPOSE 3306
ENTRYPOINT sh start.sh
