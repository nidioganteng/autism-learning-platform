<?php

// Vercel's filesystem is read-only except /tmp
// Create writable storage directories there
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

require __DIR__ . '/../public/index.php';
