# Use the official Apache base image
FROM httpd:latest

# Copy your website files to the Apache document root
# By default, the document root is /usr/local/apache2/htdocs/
COPY ./* /usr/local/apache2/htdocs/

# Expose port 80 for the web server
EXPOSE 80

# Start Apache when the container runs
CMD ["httpd-foreground"]
