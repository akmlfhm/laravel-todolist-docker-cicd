#!/bin/bash
set -e

# Tunggu database siap (sederhana, karena depends_on hanya cek container jalan, bukan db siap)
echo "Menunggu database siap..."
until mysqladmin ping -h"$DB_HOST" -u"$DB_USERNAME" -p"$DB_PASSWORD" --skip-ssl --silent; do
  sleep 2
done
echo "Database siap."

# Generate APP_KEY kalau belum ada
if [ -z "$APP_KEY" ] || [ "$APP_KEY" = "base64:" ]; then
  php artisan key:generate --force
fi

# Jalankan migration otomatis (aman untuk demo/CI, hati-hati kalau production nyata)
php artisan migrate --force

# Cache config & route untuk performa (opsional, comment kalau masih development aktif)
php artisan config:cache
php artisan route:cache

exec "$@"
