#!/usr/bin/env bash
echo "Running composer"

composer install --no-dev --working-dir=/var/www/html

echo "Caching config..."
php artisan config:cache

echo "Caching routes..."
php artisan route:cache

echo "Publishing cloudinary provider..."
php artisan vendor:publish --provider="CloudinaryLabs\CloudinaryLaravel\CloudinaryServiceProvider" --tag="cloudinary-laravel-config"

echo "Running migrations and seeding..."
# PRODUCCIÓN (Solo agrega datos)
#php artisan migrate --force --seed

# DEBUG (Limpia toda la base de datos)
php artisan migrate:fresh --seed --force