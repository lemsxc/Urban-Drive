<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\StripePaymentController;
use Illuminate\Support\Facades\Auth;
use Stripe\Stripe;
use Stripe\Charge;

Route::get('/', function () {
    // Check if the user is authenticated
    if (Auth::check()) {
        return redirect()->route('home'); // Redirect to home page if authenticated
    } else {
        return view('auth.login'); // Show login page if not authenticated
    }
});

// Registration Routes
Route::get('/register', [PageController::class, 'register']);
Route::post('/register', [RegisteredUserController::class, 'store'])->name('register');

// Login Routes
Route::get('/login', [PageController::class, 'login'])->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'check'])->name('login');

// Logout Route
Route::get('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/account/settings', [PageController::class, 'settings'])->name('settings');
    Route::post('/create-checkout-session', [StripePaymentController::class, 'createCheckoutSession'])->name('stripe.checkout');
    Route::get('/success', [StripePaymentController::class, 'success'])->name('stripe.success');
    Route::get('/cancel', [StripePaymentController::class, 'cancel'])->name('stripe.cancel');
});

Route::middleware(['auth', 'verified', 'role:User'])->group(function () {
    Route::get('/home', [PageController::class, 'home'])->name('home');
    Route::get('/car', [PageController::class, 'cars'])->name('cars');
    Route::get('/contact', [PageController::class, 'contact'])->name('contact');
    Route::get('/payment', [PageController::class, 'payment'])->name('payment');
    Route::post('/add/car', [CarController::class, 'addCar'])->name('add.cars');
});

Route::middleware(['auth', 'verified', 'role:Admin'])->group(function () {
    Route::get('/admin/dashboard', [PageController::class, 'dashboard'])->name('dashboard');
    Route::get('/admin/cars/add', [PageController::class, 'addCars'])->name('addcars');
    Route::get('/admin/cars/list', [PageController::class, 'carlist'])->name('carlist');
    Route::get('/admin/rentals', [PageController::class, 'rental'])->name('rentals');
    Route::get('/admin/drivers/list', [PageController::class, 'driverlist'])->name('driverlist');
    Route::get('/admin/drivers/add', [PageController::class, 'addDriver'])->name('addDrivers');
    Route::get('/admin/logs', [PageController::class, 'historylogs'])->name('historylogs');
});


Route::get('/file/{filename}', [FileController::class, 'showFile'])
    ->where('filename', '.*')
    ->name('show.file');

Route::get('/file/download/{filename}', [FileController::class, 'showFile'])->name('file.download');

// Email Verification
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

require __DIR__ . '/auth.php';
