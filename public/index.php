<?php
// Very simple index.php for Railway
header('Content-Type: text/html; charset=utf-8');

// Check if this is a direct file request
$requestUri = $_SERVER['REQUEST_URI'] ?? '/';
$path = parse_url($requestUri, PHP_URL_PATH);
$path = ltrim($path, '/');

// If requesting a specific file, serve it
if ($path && $path !== 'index.php' && file_exists(__DIR__ . '/' . $path)) {
    if (strpos($path, '.php') !== false) {
        include __DIR__ . '/' . $path;
    } else {
        $mimeType = mime_content_type(__DIR__ . '/' . $path);
        header('Content-Type: ' . $mimeType);
        readfile(__DIR__ . '/' . $path);
    }
    exit;
}

// Default response - show simple page
?>
<!DOCTYPE html>
<html>
<head>
    <title>Railway Laravel App</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 800px; margin: 50px auto; padding: 20px; }
        .success { background: #d4edda; border: 1px solid #c3e6cb; padding: 15px; border-radius: 5px; }
        .info { background: #d1ecf1; border: 1px solid #bee5eb; padding: 15px; border-radius: 5px; margin: 20px 0; }
        a { color: #007bff; text-decoration: none; }
        a:hover { text-decoration: underline; }
    </style>
</head>
<body>
    <h1>🚀 Railway Laravel App</h1>
    
    <div class="success">
        <h3>✅ Server is Running!</h3>
        <p>PHP is working on Railway. Current time: <?php echo date('Y-m-d H:i:s'); ?></p>
    </div>
    
    <div class="info">
        <h3>🧪 Test Links:</h3>
        <ul>
            <li><a href="/simple.php">Simple PHP Test</a></li>
            <li><a href="/test.php">PHP Info Test</a></li>
            <li><a href="/health.php">Health Check</a></li>
        </ul>
    </div>
    
    <div class="info">
        <h3>🔧 Laravel Status:</h3>
        <ul>
            <li>Vendor Directory: <?php echo file_exists('../vendor/autoload.php') ? '✅ Exists' : '❌ Missing'; ?></li>
            <li>Bootstrap: <?php echo file_exists('../bootstrap/app.php') ? '✅ Exists' : '❌ Missing'; ?></li>
            <li>Database: <?php echo file_exists('/tmp/database.sqlite') ? '✅ Exists' : '❌ Missing'; ?></li>
        </ul>
    </div>
    
    <p><strong>Next Step:</strong> If all checks pass, we'll enable Laravel routing.</p>
</body>
</html>