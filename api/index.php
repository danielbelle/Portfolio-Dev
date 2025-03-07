<?php

// load the laravel applications

require __DIR__ . '/../vendor/autoload.php';
$app = require_once __DIR__ . '/../vendor/app.php';
// Run the application
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);
$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);
$response->send();
$kernel->terminate($request, $response);
