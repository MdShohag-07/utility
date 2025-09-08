<?php

require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

use App\Models\User;
use App\Models\Setting;

echo "Seeding production database...\n";

// Run any pending migrations
echo "Running pending migrations...\n";
$exitCode = 0;
passthru('php artisan migrate --force', $exitCode);
if ($exitCode !== 0) {
    echo "Migration failed with exit code: $exitCode\n";
    exit(1);
}

// Create admin user
$admin = User::firstOrCreate(
    ['email' => 'admin@example.com'],
    [
        'username' => 'admin',
        'first_name' => 'Admin',
        'last_name' => 'User',
        'password' => 'adminpassword',
        'role' => 'admin',
        'email_verified_at' => now(),
    ]
);

echo "Admin user created/updated: {$admin->email}\n";

// Create regular user
$user = User::firstOrCreate(
    ['email' => 'user@example.com'],
    [
        'username' => 'testuser',
        'first_name' => 'Test',
        'last_name' => 'User',
        'password' => 'password',
        'role' => 'user',
        'email_verified_at' => now(),
    ]
);

echo "User created/updated: {$user->email}\n";

// Create default settings
$settings = [
    'site_name' => 'Utility Billing System',
    'site_logo' => 'settings/logos/site_logo.png',
    'company_name' => 'Your Company Name',
    'company_address' => '123 Main Street, City, State 12345',
    'company_phone' => '(555) 123-4567',
    'company_email' => 'info@yourcompany.com',
];

foreach ($settings as $key => $value) {
    Setting::firstOrCreate(['key' => $key], ['value' => $value]);
    echo "Setting created/updated: {$key}\n";
}

echo "Production seeding completed!\n";
echo "Admin login: admin@example.com / adminpassword\n";
echo "User login: user@example.com / password\n";
