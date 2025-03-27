# Use Base Image Of Webserver
FROM amazonlinux:latest

RUN yum install httpd php -y
RUN mkdir /run/php-fpm

# Copy a source Code in Container Image
COPY src/   /var/www/html/ 
COPY webapp.conf /etc/httpd/conf.d/

RUN echo "/usr/sbin/php-fpm" >> /root/.bashrc
RUN echo "rm -rvf /var/run/httpd/*" >> /root/.bashrc
RUN echo "/usr/sbin/httpd" >> /root/.bashrc

# Define your Work Dir 
WORKDIR /var/www/html/

# EXPOSE PORT 
EXPOSE 80