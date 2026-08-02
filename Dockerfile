# Usa a imagem oficial do PHP 8.3 com Apache
FROM php:8.3-apache

# Instala extensões e dependências necessárias do sistema
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    git \
    curl \
    nodejs \
    npm

# Limpa o cache do apt
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Instala extensões PHP necessárias para MySQL e Laravel
RUN docker-php-ext-install pdo pdo_mysql mbstring exif pcntl bcmath gd

# Ativa o mod_rewrite do Apache
RUN a2enmod rewrite

# Instala o Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Define o diretório de trabalho
WORKDIR /var/www/html

# Copia os arquivos do projeto
COPY . /var/www/html

# Configura a pasta public no Apache
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/conf-available/*.conf

# Instala dependências do PHP e compila os assets de front-end
RUN composer install --no-dev --optimize-autoloader
RUN npm install && npm run build

# Ajusta permissões das pastas de cache e storage
# Garante as permissões corretas para as pastas de storage, cache E database
RUN mkdir -p /var/www/html/database && \
    touch /var/www/html/database/database.sqlite && \
    chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache /var/www/html/database && \
    chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache /var/www/html/database

EXPOSE 80

# Script de inicialização
CMD php artisan config:clear && \
    chown -R www-data:www-data /var/www/html/database && \
    chmod -R 775 /var/www/html/database && \
    php artisan migrate --force && \
    apache2-foreground
