<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlanApplicationController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HelpRequestController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PaymentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/




// Routes that should only be accessible by guests (not logged in)
Route::middleware('guest')->group(function () {


    Route::get('/', function () {
        return view('welcome');
    });
});






// Routes that require the user to be logged in
Route::middleware('auth')->group(function () {


    Route::get('/payment', function () {
        return view('payment');
    });


    Route::post('/paystack/initialize', [PaymentController::class, 'initialize']);
    Route::post('/paystack/verify', [PaymentController::class, 'verify']);
    Route::post('/payment/save', [PaymentController::class, 'store']);

    Route::get('/pay', [PaymentController::class, 'redirectToGateway'])->name('pay');
    Route::get('/payment/callback', [PaymentController::class, 'handleGatewayCallback']);


    Route::get('/index', [PlanApplicationController::class, 'index'])->name('index');

    Route::get('/monthly-plan', [PlanApplicationController::class, 'plan'])->name('monthly.plan');
    Route::post('/apply', [PlanApplicationController::class, 'store'])->name('plans.apply');


    Route::get('/transactions', [PlanApplicationController::class, 'transactions'])->name('transactions');



    Route::get('/notifications', [PlanApplicationController::class, 'notifications'])->name('notifications');
    Route::get('/help', [PlanApplicationController::class, 'help'])->name('help');
    Route::get('/settings', [PlanApplicationController::class, 'settings'])->name('settings');
    Route::get('/logout', [PlanApplicationController::class, 'Logout'])->name('logout');


    Route::post('/help', [PlanApplicationController::class, 'helpStore'])->name('help.store');
    Route::get('/password', [UserController::class, 'editPassword'])->name('password');
    Route::post('/password/change', [UserController::class, 'password_change'])->name('password.change');


    Route::post('/profile/photo', [UserController::class, 'updateProfilePhoto'])->name('profile.photo.update');
    Route::put('/profile/update', [UserController::class, 'update'])->name('profile.update');

    Route::post('/help', [HelpRequestController::class, 'store'])->name('help.store');

    Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
});






Auth::routes();

/*Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');*/
