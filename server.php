<?php
// Simple PHP server script for Railway
$port = $_ENV['PORT'] ?? 8000;
$host = '0.0.0.0';

echo "Starting PHP server on $host:$port\n";
echo "Document root: " . __DIR__ . "/public\n";

// Change to public directory
chdir(__DIR__ . '/public');

// Start the server
$command = "php -S $host:$port index.php";
echo "Running: $command\n";

exec($command);
?>
