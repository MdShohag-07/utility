<?php
// Very simple test to see if PHP is working
header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Railway PHP Test</title>
</head>
<body>
    <h1>✅ PHP is Working on Railway!</h1>
    <p>Current Time: <?php echo date('Y-m-d H:i:s'); ?></p>
    <p>PHP Version: <?php echo PHP_VERSION; ?></p>
    <p>Server: <?php echo $_SERVER['SERVER_SOFTWARE'] ?? 'Unknown'; ?></p>
    <p>Request URI: <?php echo $_SERVER['REQUEST_URI'] ?? 'Unknown'; ?></p>
    <p>Port: <?php echo $_SERVER['SERVER_PORT'] ?? 'Unknown'; ?></p>
    
    <h2>Environment Variables:</h2>
    <ul>
        <li>APP_ENV: <?php echo $_ENV['APP_ENV'] ?? 'Not set'; ?></li>
        <li>PORT: <?php echo $_ENV['PORT'] ?? 'Not set'; ?></li>
        <li>DB_CONNECTION: <?php echo $_ENV['DB_CONNECTION'] ?? 'Not set'; ?></li>
    </ul>
    
    <h2>File System Check:</h2>
    <ul>
        <li>Current Directory: <?php echo getcwd(); ?></li>
        <li>Laravel vendor exists: <?php echo file_exists('../vendor/autoload.php') ? 'Yes' : 'No'; ?></li>
        <li>Laravel bootstrap exists: <?php echo file_exists('../bootstrap/app.php') ? 'Yes' : 'No'; ?></li>
        <li>Database file exists: <?php echo file_exists('/tmp/database.sqlite') ? 'Yes' : 'No'; ?></li>
    </ul>
    
    <h2>Test Links:</h2>
    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/test.php">Test PHP</a></li>
        <li><a href="/health.php">Health Check</a></li>
        <li><a href="/simple.php">This Page</a></li>
    </ul>
</body>
</html>
