<?php
use App\Http\Controllers\AuthController;

Route::post('/send-code', [appController::class, 'sendVerificationCode']);
Route::post('/verify-code', [appController::class, 'verifyCode']);
// Route::post('/logout', [AuthController::class, 'logout']); // إذا استخدمت JWT/Sanctum

use App\Http\Controllers\AppController;

Route::get('/', function () {
    return view('welcome');
});
