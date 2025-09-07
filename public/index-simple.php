<?php
// Simple Laravel bootstrap for Railway
require_once __DIR__ . '/../vendor/autoload.php';

// Set environment variables
putenv('APP_ENV=production');
putenv('APP_DEBUG=false');
putenv('APP_KEY=base64:6q6Eovlou6ZO4afG8/Ctt+49VdB3ZormqItTqgic1G0=');
putenv('DB_CONNECTION=sqlite');
putenv('DB_DATABASE=/tmp/database.sqlite');

// Create Laravel application
$app = require_once __DIR__ . '/../bootstrap/app.php';

// Handle the request
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);
$request = Illuminate\Http\Request::capture();
$response = $kernel->handle($request);
$response->send();
$kernel->terminate($request, $response);
?>
