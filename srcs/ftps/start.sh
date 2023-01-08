openrc
touch /run/openrc/softlevel
rc-status
chown -R wbryon:12345 /home/wbryon
/usr/sbin/pure-ftpd -p 21000:21000 -P $ip -Y 2
