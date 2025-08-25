<?php

session_start();

use App\Http\Controllers\AuthController;
use App\Helpers\AuthHelper;
use App\Http\Controllers\RoomController;


// Include helper
require_once __DIR__ . '/../app/Helpers/AuthHelper.php';

// Auth
Route::get('/signup', function() {
    AuthHelper::guestOnly(); // redirect kung nakalogin na
    return (new AuthController())->showSignup();
});
Route::post('/signup', [AuthController::class, 'signup']);

Route::get('/login', function() {
    AuthHelper::guestOnly(); // redirect kung nakalogin na
    return (new AuthController())->showLogin();
});
Route::post('/login', [AuthController::class, 'login']);

Route::get('/logout', [AuthController::class, 'logout']);

// Dashboard
Route::get('/dashboard', function () {
    if (!session()->has('user_id')) {
        return view('dashboard_guest'); // landing page for guests
    }
    return view('dashboard');          // personalized dashboard
});

// Root
Route::get('/', function () {
    return redirect('/dashboard');
});

//Room
Route::get('/rooms', [RoomController::class, 'index'])->name('rooms.index');
Route::post('/rooms/toggle/{id}', [RoomController::class, 'toggleStatus'])->name('rooms.toggle');
