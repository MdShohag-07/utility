<?php
// Simple test to verify PHP is working
echo "PHP is working!<br>";
echo "PHP Version: " . PHP_VERSION . "<br>";
echo "Current Time: " . date('Y-m-d H:i:s') . "<br>";
echo "Server: " . $_SERVER['SERVER_SOFTWARE'] ?? 'Unknown' . "<br>";

// Test if we can access Laravel files
if (file_exists(__DIR__ . '/../vendor/autoload.php')) {
    echo "Laravel vendor directory exists!<br>";
} else {
    echo "Laravel vendor directory NOT found!<br>";
}

if (file_exists(__DIR__ . '/../bootstrap/app.php')) {
    echo "Laravel bootstrap exists!<br>";
} else {
    echo "Laravel bootstrap NOT found!<br>";
}

// Show environment
echo "Environment variables:<br>";
echo "APP_ENV: " . ($_ENV['APP_ENV'] ?? 'Not set') . "<br>";
echo "PORT: " . ($_ENV['PORT'] ?? 'Not set') . "<br>";
?>
