FROM php:8.4-cli

WORKDIR /app

RUN apt-get update && apt-get install -y \
    curl git zip unzip libpng-dev libonig-dev libxml2-dev \
    && docker-php-ext-install mbstring bcmath gd \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash - \
    && apt-get install -y nodejs && apt-get clean

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

COPY . .

RUN composer install --no-dev --optimize-autoloader --no-interaction

RUN npm ci && npm run build

RUN mkdir -p storage/framework/views storage/framework/cache/data \
    storage/framework/sessions storage/logs bootstrap/cache \
    && chmod -R 775 storage bootstrap/cache

EXPOSE 8000

CMD php artisan config:cache && php artisan route:cache && \
    php artisan serve --host=0.0.0.0 --port=${PORT:-8000}
