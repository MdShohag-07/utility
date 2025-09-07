#!/bin/bash

# Set environment variables
export APP_ENV=production
export APP_DEBUG=false
export APP_KEY=base64:6q6Eovlou6ZO4afG8/Ctt+49VdB3ZormqItTqgic1G0=
export DB_CONNECTION=sqlite
export DB_DATABASE=/tmp/database.sqlite

# Create database directory if it doesn't exist
mkdir -p /tmp

# Run Laravel migrations and seeding
php artisan migrate --force
php artisan db:seed --force

# Clear caches
php artisan config:clear
php artisan cache:clear
php artisan route:clear
php artisan view:clear

# Create storage link
php artisan storage:link

# Start the server
cd public
php -S 0.0.0.0:$PORT index.php