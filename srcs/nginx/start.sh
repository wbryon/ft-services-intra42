openrc
touch /run/openrc/softlevel
rc-status
rc-service sshd start
rc-service telegraf start
nginx -g 'daemon off;'
