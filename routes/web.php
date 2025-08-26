<?php

session_start();

use App\Http\Controllers\AuthController;
use App\Helpers\AuthHelper;
use App\Http\Controllers\RoomController;

// Include helper
require_once __DIR__ . '/../app/Helpers/AuthHelper.php';

//for booking na to
Route::get('/rooms/{room}/book', [RoomController::class, 'showBooking'])->name('rooms.showBooking');
Route::post('/rooms/{room}/book', [RoomController::class, 'storeBooking'])->name('rooms.storeBooking');

// Auth
Route::get('/signup', function() {
    AuthHelper::guestOnly(); // redirect kung nakalogin na
    return (new AuthController())->showSignup();
})->name('signup');

Route::post('/signup', [AuthController::class, 'signup'])->name('signup.store');

Route::get('/login', function() {
    AuthHelper::guestOnly(); // redirect kung nakalogin na
    return (new AuthController())->showLogin();
})->name('login');

Route::post('/login', [AuthController::class, 'login'])->name('login.store');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// Dashboard
Route::get('/dashboard', function () {
    if (!session()->has('user_id')) {
        return view('dashboard_guest'); // landing page for guests
    }
    return view('dashboard');          // personalized dashboard
})->name('dashboard');

// Root
Route::get('/', function () {
    return redirect('/dashboard');
});

//Room
Route::get('/rooms', [RoomController::class, 'index'])->name('rooms.index');
Route::post('/rooms/toggle/{id}', [RoomController::class, 'toggleStatus'])->name('rooms.toggle');
