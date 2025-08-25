<?php

use App\Http\Controllers\AuthController;

// Auth
Route::get('/signup', [AuthController::class, 'showSignup']);
Route::post('/signup', [AuthController::class, 'signup']);

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/logout', [AuthController::class, 'logout']);

// Dashboard
Route::get('/dashboard', function () {
    if (!session()->has('user_id')) {
        return view('dashboard_guest'); // landing page for guests
    }
    return view('dashboard');          // personalized dashboard
});

Route::get('/', function () {
    return redirect('/dashboard');
});
