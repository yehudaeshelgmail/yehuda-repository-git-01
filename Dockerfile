############################################################
# Dockerfile to build NGINX + PHP-FPM container images
# Based on CentOs
###########################################################
FROM centos:7
###########################################################
# Install Packages 
###########################################################
RUN yum -y install epel-release
RUN yum -y update
RUN yum -y install nginx
RUN yum -y install php php-cli php-fpm php-mysqlnd php-zip php-devel php-gd php-mcrypt php-mbstring php-curl php-xml php-pear php-bcmath php-json
###########################################################
# Add Replace Files                                                        
###########################################################
ADD index.html /usr/share/nginx/html/index.html
ADD yehuda_modify.html /usr/share/nginx/html/yehuda_modify.html
ADD start_services.sh /usr/bin/start_services.sh  
COPY nginx.conf  /etc/nginx/nginx.conf     
COPY php.ini    /etc/php.ini              
RUN chmod a+x /usr/bin/systemctl
ADD phpinfo.php /usr/share/nginx/html/phpinfo.php
ADD commitit_web_page.php /usr/share/nginx/html/commitit_web_page.php
###########################################################
# Network config   
###########################################################
EXPOSE 80/tcp
###########################################################
# Start Services   
###########################################################
# CMD ["php-fpm" && tail -F /var/log/php-fpm-error.log]"
# CMD ["nginx", "-g daemon off;"]
CMD ["/bin/bash", "start_services.sh"]
