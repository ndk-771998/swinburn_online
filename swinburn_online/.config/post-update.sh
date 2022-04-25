#!/bin/sh

php artisan migrate --force
# php artisan migrate:refresh --force
# php artisan db:seed --force

# env DB_DATABASE=db_p16001_v01_webpress_com_vn php artisan migrate --force
# env DB_DATABASE=db_p16001_v01_webpress_com_vn php artisan migrate:refresh --force
# env DB_DATABASE=db_p16001_v01_webpress_com_vn php artisan db:seed --force

mkdir -p storage/logs
mkdir -p uploads/upload
mkdir -p uploads/medias
touch storage/logs/laravel.log
chmod -R 777 storage
chmod -R 777 public/uploads
chmod -R 777 public/uploads/upload
chmod -R 777 public/uploads/medias
chmod -R 777 uploads
chmod -R 777 workspace
chmod -R 777 bootstrap/cache

php artisan clear-compiled
php artisan auth:clear-resets
php artisan debugbar:clear
php artisan event:clear
php artisan medialibrary:clear
php artisan optimize:clear
php artisan cache:clear
php artisan route:clear
php artisan config:clear
php artisan view:clear

LAST_RELEASE_PATH=$1

echo $LAST_RELEASE_PATH

rsync --update -raz --progress $LAST_RELEASE_PATH/public/uploads $(pwd)/public
