# Usa uma imagem oficial do PHP com Apache
FROM php:8.2-apache

# Instala a extensão mysqli necessária para conectar ao banco
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

# Habilita mod_rewrite do Apache (útil para URLs amigáveis se precisar no futuro)
RUN a2enmod rewrite

# Copia os arquivos do projeto para a pasta pública do Apache
COPY . /var/www/html/

# Define permissões corretas
RUN chown -R www-data:www-data /var/www/html

# O Apache expõe a porta 80 por padrão
EXPOSE 80