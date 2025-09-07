#!/bin/bash

# Create database directory if it doesn't exist
mkdir -p /app/database

# Create SQLite database file
touch /app/database/database.sqlite

# Set proper permissions
chmod 664 /app/database/database.sqlite
chmod 775 /app/database

# Run Laravel setup commands
php artisan migrate --force
php artisan db:seed --force
php artisan storage:link
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Start the application
php artisan serve --host=0.0.0.0 --port=$PORT
