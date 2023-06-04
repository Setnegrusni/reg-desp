FROM php:7.4-apache

COPY api-rest.php /var/www/html/

# Agrega la copia del archivo de configuración personalizado
COPY custom-apache.conf /etc/apache2/conf-available/

# Habilita el archivo de configuración personalizado
RUN a2enconf custom-apache

EXPOSE 80

#Inicia el servidor Apache
CMD ["apache2-foreground"]

