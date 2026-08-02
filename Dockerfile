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

# Instala extensões PHP do Laravel
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Ativa o mod_rewrite do Apache para as rotas do Laravel funcionarem
RUN a2enmod rewrite

# Instala o Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Define o diretório de trabalho
WORKDIR /var/www/html

# Copia os arquivos do projeto para o container
COPY . /var/www/html

# Configura a pasta public do Laravel no Apache
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/conf-available/*.conf

# Instala dependências e compila o front
RUN composer install --no-dev --optimize-autoloader
RUN npm install && npm run build

# Da permissão para as pastas storage e bootstrap/cache
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Porta que o Apache escuta
EXPOSE 80

CMD ["apache2-foreground"]
