openrc boot
rc-update add mariadb
rc-service mariadb setup
rc-service mariadb start
mysql --user=root -e "CREATE DATABASE IF NOT EXISTS wordpress; use wordpress"
mysql --user=root -e "CREATE DATABASE IF NOT EXISTS phpmyadmin; use phpmyadmin"
echo "CREATE USER 'wbryon'@'%' identified by '12345';" | mysql -u root --skip-password
mysql -u root -e "GRANT ALL PRIVILEGES ON *.* TO 'wbryon'@'%'; FLUSH PRIVILEGES;"
mysql -u root wordpress < /wordpress.sql
sh usr/share/mariadb/mysql.server start
tail -f /dev/null
