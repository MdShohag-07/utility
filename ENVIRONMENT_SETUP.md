# Environment Variables Setup Guide

## 🚀 **Quick Setup for Render Deployment**

### **Step 1: Access Render Dashboard**
1. Go to [render.com](https://render.com)
2. Navigate to your `utility-billing` service
3. Click on **"Environment"** tab

### **Step 2: Add Environment Variables**
Copy and paste these **ESSENTIAL** variables:

```bash
APP_NAME=Utility Billing System
APP_ENV=production
APP_KEY=base64:lPgxz7Mp1VoufVTObzAYiiAckeHGgijp5SIQyemgvNg=
APP_DEBUG=false
APP_URL=https://utility-7cqv.onrender.com
DB_CONNECTION=sqlite
DB_DATABASE=/opt/render/project/src/database/database.sqlite
CACHE_DRIVER=file
SESSION_DRIVER=file
SESSION_LIFETIME=120
QUEUE_CONNECTION=sync
LOG_CHANNEL=stack
LOG_LEVEL=debug
BROADCAST_DRIVER=log
FILESYSTEM_DISK=local
BCRYPT_ROUNDS=12
```

### **Step 3: Add Optional Variables (if needed)**
```bash
UTILITY_COMPANY_NAME=Your Utility Company
UTILITY_COMPANY_ADDRESS=123 Main Street, City, State 12345
UTILITY_COMPANY_PHONE=(555) 123-4567
UTILITY_COMPANY_EMAIL=info@yourutility.com
DEFAULT_CURRENCY=USD
DEFAULT_TAX_RATE=0.00
DEFAULT_DUE_DAYS=30
ENABLE_USER_REGISTRATION=true
ENABLE_EMAIL_VERIFICATION=false
```

### **Step 4: Add Vite Variables (for assets)**
```bash
VITE_APP_NAME=Utility Billing System
VITE_PUSHER_APP_KEY=
VITE_PUSHER_HOST=
VITE_PUSHER_PORT=
VITE_PUSHER_SCHEME=
VITE_PUSHER_APP_CLUSTER=
```

### **Step 5: Add Pusher Variables (can be empty)**
```bash
PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_HOST=
PUSHER_PORT=443
PUSHER_SCHEME=https
PUSHER_APP_CLUSTER=mt1
```

## 📧 **Mail Configuration (Optional)**

If you want email notifications, add these:

```bash
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=your-email@gmail.com
MAIL_PASSWORD=your-app-password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=noreply@utility-billing.com
MAIL_FROM_NAME=Utility Billing System
```

## 🔐 **Security Notes**

- **APP_KEY**: Already provided (secure)
- **APP_DEBUG**: Set to `false` for production
- **APP_URL**: Update to your actual domain
- **Database**: Using SQLite (no additional setup needed)

## 🚀 **After Adding Variables**

1. **Save** the environment variables
2. **Redeploy** your service
3. **Wait** for deployment to complete
4. **Test** your website

## 📋 **Complete Variable List**

For the complete list of all available environment variables, see:
- `environment-variables.txt` - Full list with descriptions
- `render-env-vars.txt` - Render-specific format

## ✅ **Verification**

After deployment, your website should:
- ✅ Load with proper styling
- ✅ Allow admin login: `admin@example.com` / `adminpassword`
- ✅ Allow user login: `user@example.com` / `password`
- ✅ Display PDF statements correctly
- ✅ Have working navigation and forms

## 🆘 **Troubleshooting**

If you encounter issues:
1. Check that all required variables are set
2. Ensure `APP_DEBUG=false` for production
3. Verify `APP_URL` matches your actual domain
4. Check deployment logs for errors
