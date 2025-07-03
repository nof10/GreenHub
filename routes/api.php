<?php
<<<<<<< HEAD
=======
use App\Http\Controllers\AppController;

Route::post('/send-code', [AppController::class, 'sendVerificationCode']);
Route::post('/verify-code', [AppController::class, 'verifyCode']);
// Route::post('/logout', [AuthController::class, 'logout']); // إذا استخدمت JWT/Sanctum

>>>>>>> d7eddb0ec82ef0f6e59e454872ca2ad8a89152d4
use App\Http\Controllers\AppController;

Route::post('/send-code', [AppController::class, 'sendVerificationCode']);
Route::post('/verify-code', [AppController::class, 'verifyCode']);
// Route::post('/logout', [AuthController::class, 'logout']); // إذا استخدمت JWT/Sanctum

