#!/bin/bash

# Create database directory if it doesn't exist
mkdir -p /tmp

# Generate application key if not set
if [ -z "$APP_KEY" ]; then
    php artisan key:generate --force
fi

# Run database migrations
php artisan migrate --force

# Clear and cache configuration
php artisan config:clear
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Start the application
php artisan serve --host=0.0.0.0 --port=$PORT
