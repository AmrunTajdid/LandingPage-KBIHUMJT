<?php

// Forward Vercel serverless requests to Laravel index.php
// Setup writable storage directory in /tmp
$storagePath = '/tmp/storage';
if (!is_dir($storagePath)) {
    @mkdir($storagePath, 0755, true);
    @mkdir($storagePath . '/framework/views', 0755, true);
    @mkdir($storagePath . '/framework/cache', 0755, true);
    @mkdir($storagePath . '/framework/sessions', 0755, true);
    @mkdir($storagePath . '/logs', 0755, true);
}

require __DIR__ . '/../public/index.php';
