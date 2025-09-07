# Hostinger Deployment Guide

## 🚀 Deploying Laravel App to Hostinger

### Step 1: Prepare Your App

1. **Create a production .env file** with these settings:
```env
APP_NAME="Utility Billing"
APP_ENV=production
APP_KEY=base64:lPgxz7Mp1VoufVTObzAYiiAckeHGgijp5SIQyemgvNg=
APP_DEBUG=false
APP_URL=https://yourdomain.com

DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_username
DB_PASSWORD=your_database_password

BROADCAST_DRIVER=log
CACHE_DRIVER=file
FILESYSTEM_DISK=local
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120
```

### Step 2: Upload Files to Hostinger

1. **Login to Hostinger Control Panel**
2. **Go to File Manager**
3. **Navigate to public_html folder**
4. **Upload your Laravel files** (except vendor folder)

### Step 3: Set Up Database

1. **Create MySQL Database** in Hostinger control panel
2. **Note down database credentials**
3. **Update .env file** with your database details

### Step 4: Install Dependencies

1. **Access Terminal/SSH** in Hostinger
2. **Navigate to your app directory**
3. **Run these commands:**
```bash
composer install --no-dev --optimize-autoloader
php artisan key:generate
php artisan migrate
php artisan db:seed
php artisan storage:link
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

### Step 5: Configure Web Server

1. **Move public folder contents** to public_html
2. **Update .htaccess** for Laravel routing
3. **Set proper file permissions**

### Step 6: Test Your Site

1. **Visit your domain**
2. **Test admin login:** admin@example.com / adminpassword
3. **Verify all features work**

## 📋 Required Files to Upload

- All Laravel files (except vendor, node_modules)
- .env file with production settings
- public/.htaccess file
- database/ folder with migrations

## 🔧 Common Issues

1. **500 Error:** Check file permissions (755 for folders, 644 for files)
2. **Database Error:** Verify database credentials in .env
3. **Storage Issues:** Run `php artisan storage:link`
4. **Cache Issues:** Run `php artisan config:clear`

## 📞 Support

If you need help with any step, contact Hostinger support or check their Laravel hosting documentation.
