#USE Base Image of Webserver
FROM nginx:latest

#copy a source code in conatainer image
COPY src/  /usr/share/nginx/html/

#define your work dir
WORKDIR /usr/share/nginx/html/

#Expose PORT
EXPOSE 80