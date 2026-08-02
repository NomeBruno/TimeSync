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
    npm \
    sqlite3 \
    libsqlite3-dev

# Limpa o cache do apt
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Instala extensões PHP do Laravel (incluindo SQLite e PDO)
RUN docker-php-ext-install pdo pdo_mysql pdo_sqlite mbstring exif pcntl bcmath gd

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

# Instala dependências e compila os assets
RUN composer install --no-dev --optimize-autoloader
RUN npm install && npm run build

# Ajusta permissões
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Garante a criação do banco SQLite (caso use SQLite)
RUN touch /var/www/html/database/database.sqlite
RUN chown www-data:www-data /var/www/html/database/database.sqlite

EXPOSE 80

# Script de inicialização: roda as migrations/seeders e inicia o Apache
CMD php artisan config:clear && \
    php artisan migrate --force --seed && \
    apache2-foreground
