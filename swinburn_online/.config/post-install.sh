#!/bin/sh

php artisan migrate --force
php artisan db:seed --force

mkdir -p storage/logs
touch storage/logs/laravel.log
chmod -R 777 storage
