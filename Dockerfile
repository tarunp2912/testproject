# Use Base Image Of Webserver
FROM nginx:latest

# Copy a source Code in Container Image
COPY src/   /usr/share/nginx/html/ 

# Define your Work Dir 
WORKDIR /usr/share/nginx/html/

# EXPOSE PORT 
EXPOSE 80