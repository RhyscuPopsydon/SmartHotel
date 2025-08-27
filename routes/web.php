<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Helpers\AuthHelper;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\ReceptionistController;

// --- Public / Guest Routes ---
Route::get('/rooms/{room}/book', [RoomController::class, 'showBooking'])->name('rooms.showBooking');
Route::post('/rooms/{room}/book', [RoomController::class, 'storeBooking'])->name('rooms.storeBooking');

// Authentication
Route::get('/signup', function () {
    AuthHelper::guestOnly();
    return (new AuthController())->showSignup();
})->name('signup');

Route::post('/signup', [AuthController::class, 'signup'])->name('signup.store');

Route::get('/login', function () {
    AuthHelper::guestOnly();
    return (new AuthController())->showLogin();
})->name('login');

Route::post('/login', [AuthController::class, 'login'])->name('login.store');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// Dashboard with role-based redirect
Route::get('/dashboard', function () {
    if (!session()->has('user_id')) {
        return view('dashboard_guest');
    }

    $role = session('role');
    if ($role === 'receptionist') {
        return redirect()->route('receptionist.index');
    } elseif ($role === 'admin') {
        // Placeholder for admin dashboard (if you add it later)
        return view('dashboard_admin');
    }

    return view('dashboard'); // Default guest dashboard
})->name('dashboard');

// Home redirect
Route::get('/', fn() => redirect('/dashboard'));

// Rooms
Route::get('/rooms', [RoomController::class, 'index'])->name('rooms.index');
Route::post('/rooms/toggle/{id}', [RoomController::class, 'toggleStatus'])->name('rooms.toggle');

Route::prefix('receptionist')->name('receptionist.')->group(function () {
    Route::get('/', [ReceptionistController::class, 'index'])->name('index');
    Route::get('/create', [ReceptionistController::class, 'create'])->name('create');
    Route::post('/', [ReceptionistController::class, 'store'])->name('store');
    Route::get('/{booking}/edit', [ReceptionistController::class, 'edit'])->name('edit');
    Route::put('/{booking}', [ReceptionistController::class, 'update'])->name('update');
    Route::delete('/{booking}', [ReceptionistController::class, 'destroy'])->name('destroy');
    Route::post('/{booking}/checkin', [ReceptionistController::class, 'checkin'])->name('checkin');
    Route::post('/{booking}/checkout', [ReceptionistController::class, 'checkout'])->name('checkout');
});
