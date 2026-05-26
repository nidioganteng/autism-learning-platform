<?php

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

define('LARAVEL_START', microtime(true));

require __DIR__ . '/../vendor/autoload.php';

$app = require_once __DIR__ . '/../bootstrap/app.php';

try {
    $app->handleRequest(Illuminate\Http\Request::capture());
} catch (\Throwable $e) {
    http_response_code(500);
    echo '<b>Error:</b> ' . htmlspecialchars($e->getMessage()) . '<br>';
    echo '<b>File:</b> ' . $e->getFile() . ':' . $e->getLine() . '<br>';
    echo '<pre>' . htmlspecialchars($e->getTraceAsString()) . '</pre>';
}
