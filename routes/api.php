<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return ['Laravel' => app()->version()];
});

Route::prefix('auth')->group(static function () {
    require __DIR__ . '/api/auth.php';
});

Route::prefix('v1')->group(static function () {
    require __DIR__ . '/api/v1.php';
});
