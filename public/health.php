<?php
// Simple health check endpoint
header('Content-Type: application/json');
echo json_encode([
    'status' => 'ok',
    'message' => 'Laravel application is running',
    'timestamp' => date('Y-m-d H:i:s'),
    'php_version' => PHP_VERSION
]);
?>
