<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

$tmpStorage = '/tmp/storage';

foreach ([
    '/framework/views',
    '/framework/cache/data',
    '/framework/sessions',
    '/logs',
] as $dir) {
    $path = $tmpStorage . $dir;
    if (!is_dir($path)) {
        mkdir($path, 0775, true);
    }
}

putenv("APP_STORAGE_PATH=$tmpStorage");
$_ENV['APP_STORAGE_PATH'] = $tmpStorage;
$_SERVER['APP_STORAGE_PATH'] = $tmpStorage;

echo "Step 1: Storage dirs created<br>";

try {
    define('LARAVEL_START', microtime(true));
    require __DIR__ . '/../vendor/autoload.php';
    echo "Step 2: Autoload OK<br>";

    $app = require_once __DIR__ . '/../bootstrap/app.php';
    echo "Step 3: App bootstrapped OK<br>";

    use Illuminate\Http\Request;
    $app->handleRequest(Request::capture());
} catch (\Throwable $e) {
    echo "<b>Error:</b> " . $e->getMessage() . "<br>";
    echo "<b>File:</b> " . $e->getFile() . ":" . $e->getLine() . "<br>";
    echo "<pre>" . $e->getTraceAsString() . "</pre>";
}
