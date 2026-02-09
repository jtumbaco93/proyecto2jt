FROM php:8.2-apache

# Instalar extensión PDO MySQL
RUN docker-php-ext-install pdo pdo_mysql

# Copiar todo el código al contenedor
COPY . /var/www/html/

# Configurar el Document Root a la carpeta public
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf

# Habilitar mod_rewrite para URLs limpias
RUN a2enmod rewrite