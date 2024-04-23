
FROM php:latest

RUN apt-get update && apt-get install -y \
    git \
    curl \
    zip \
    vim \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    unzip

WORKDIR /var/www/html

COPY . .

CMD ["php", "-S","0.0.0.0:8000","-t","public"]
# php -S localhost:8000 -t public
