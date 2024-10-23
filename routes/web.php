<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\InsuranceController;
use App\Http\Controllers\InsurancePurchaseController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about-us', function () {
    return view('about-us');
});

Route::get('/insurances', [InsuranceController::class, 'index'])->name('insurances');

Route::get('/insurances-details', function () {
    return view('insurances_details');
});
Route::get('/insurances-details', [InsuranceController::class, 'show_insurance'])->name('insurances.details');


Route::get('/contact-us', function () {
    return view('contact-us');
});

Route::get('/login', function () {
    return view('login');
});
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::get('/signup', function () {
    return view('signup');
});

Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::middleware(['auth'])->group(function () {
    Route::get('/insurances-form', function () {
        $user = Auth::user();
        return view('insurances-form', compact('user'));
    });
    Route::post('/purchase-insuranse', [InsurancePurchaseController::class, 'store'])->name('purchase.insuranse');

    Route::get('/profile', [AuthController::class, 'show'])->name('profile.show');
    Route::post('/user/update', [AuthController::class, 'update'])->name('user.update');
    Route::post('/password/update', [AuthController::class, 'updatePassword'])->name('password.update');

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
   
});