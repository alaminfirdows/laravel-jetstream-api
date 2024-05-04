<?php

declare(strict_types=1);

use App\Http\Controllers\Auth\PasswordController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum', 'verified'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth')->group(function () {
    Route::put('password', [PasswordController::class, 'update'])->name('password.update');
});
