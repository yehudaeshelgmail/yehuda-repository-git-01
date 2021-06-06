#!/bin/sh
# /usr/sbin/php-fpm -F 
/usr/sbin/php-fpm -D 
# /usr/sbin/nginx
nginx -g "daemon off;"
# php-fpm &
# service  php-fpm start 
# service  nginx  start 
# systemctl enable php-fpm.service
# systemctl restart php-fpm.service
# systemctl restart nginx.service
