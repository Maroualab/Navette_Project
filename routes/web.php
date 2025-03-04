<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\authController;
use App\Http\Controllers\ShuttleOfferController;
use Illuminate\Support\Facades\Route;

// Home page
Route::get('/', function () {
    return view('home');
})->name('home');


// Authentication routes
Route::get('/login', function () {return view('auth.login');})->name("login");
Route::post('/login', [authController::class,'login'])->name("login.store");

Route::get('/register', function () {return view('auth.register');})->name("register");

Route::post('/register',[authController::class,'register'])->name("register.create");
Route::get('/logout',[authController::class,'logout']);


// Offers routes
Route::get('/offres', function () {
    return view('offres.index');
});


Route::get('/offres/{id}', function ($id) {
    return view('offres.show');
})->where('id', '[0-9]+');

// Route::get('/offres/create', function () {
//     return view('offres.create');
// });

Route::prefix('transport-companies')->group(function () {
    Route::get('/offers/create', [ShuttleOfferController::class, 'create'])->name('offers.create');
    Route::post('/offers', [ShuttleOfferController::class, 'store'])->name('offers.store');
});

// Requests routes
Route::get('/demandes/create', function () {
    return view('demandes.create');
});

Route::get('/demandes', function () {
    return view('demandes.index');
});

Route::get('/demandes/{id}', function ($id) {
    return view('demandes.show');
})->where('id', '[0-9]+');

// Dashboard routes
Route::get('/dashboard', function () {
    return view('dashboard.user');
});

Route::get('/dashboard/company', function () {
    return view('dashboard.company');
});

// Subscriptions routes
Route::get('/abonnements', function () {
    return view('abonnements.index');
});

Route::get('/abonnements/{id}', function ($id) {
    return view('abonnements.show');
})->where('id', '[0-9]+');

Route::get('/abonnements/create', function () {
    return view('abonnements.create');
});

// Profile routes
Route::get('/profile', function () {
    // You might want to add logic here to determine user type and redirect accordingly
    return view('profile.user');
});

Route::get('/profile/company', function () {
    return view('profile.company');
});

// Payments route
Route::get('/payments', function () {
    return view('payments.index');
});

// Admin routes
Route::get('/admin', function () {
    return view('admin.dashboard');
});

// Help routes
Route::get('/help/faq', function () {
    return view('help.faq');
});

// Contact route
Route::get('/contact', function () {
    return view('contact');
});

// Additional utility routes (these might not have dedicated views but are mentioned in navigation)
Route::get('/societes/inscription', function () {
    // Implement view or redirect as needed
});

Route::get('/societes/login', function () {
    // Implement view or redirect as needed
});

// Terms and Privacy routes (mentioned in some forms)
Route::get('/terms', function () {
    // Implement view as needed
});

Route::get('/privacy', function () {
    // Implement view as needed
});

// Password reset route (mentioned in login form)
Route::get('/password/reset', function () {
    // Implement view as needed
});

