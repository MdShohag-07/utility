<?php
// Simple router for Railway deployment
$requestUri = $_SERVER['REQUEST_URI'];
$path = parse_url($requestUri, PHP_URL_PATH);

// Remove leading slash
$path = ltrim($path, '/');

// If it's a static file request, serve it directly
if ($path && file_exists(__DIR__ . '/' . $path) && !is_dir(__DIR__ . '/' . $path)) {
    $mimeType = mime_content_type(__DIR__ . '/' . $path);
    header('Content-Type: ' . $mimeType);
    readfile(__DIR__ . '/' . $path);
    exit;
}

// If it's the root or index, show our test page
if (empty($path) || $path === 'index.html') {
    readfile(__DIR__ . '/index.html');
    exit;
}

// For PHP files, include them
if (strpos($path, '.php') !== false && file_exists(__DIR__ . '/' . $path)) {
    include __DIR__ . '/' . $path;
    exit;
}

// For Laravel routes, try to bootstrap Laravel
try {
    // Set environment variables
    putenv('APP_ENV=production');
    putenv('APP_DEBUG=false');
    putenv('APP_KEY=base64:6q6Eovlou6ZO4afG8/Ctt+49VdB3ZormqItTqgic1G0=');
    putenv('DB_CONNECTION=sqlite');
    putenv('DB_DATABASE=/tmp/database.sqlite');
    
    // Bootstrap Laravel
    require_once __DIR__ . '/../vendor/autoload.php';
    $app = require_once __DIR__ . '/../bootstrap/app.php';
    
    // Handle the request
    $kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);
    $request = Illuminate\Http\Request::capture();
    $response = $kernel->handle($request);
    $response->send();
    $kernel->terminate($request, $response);
} catch (Exception $e) {
    // If Laravel fails, show error page
    http_response_code(500);
    echo "<h1>Laravel Error</h1>";
    echo "<p>Error: " . htmlspecialchars($e->getMessage()) . "</p>";
    echo "<p>File: " . htmlspecialchars($e->getFile()) . "</p>";
    echo "<p>Line: " . $e->getLine() . "</p>";
}
?>