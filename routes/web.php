<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogController;
use Illuminate\Support\Facades\Route;

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
# Welcome Page
Route::get('/', function () {
    return view('auth.login');
});

# Authentication
Auth::routes();

Route::get('/salesorder', [App\Http\Controllers\HomeController::class, 'index'])->name('salesorder');

# 2FA
Route::middleware(['2fa'])->group(function () {

    Route::get('/salesorder', [HomeController::class, 'index'])->name('salesorder');
    Route::post('/2fa', function () {
        return redirect(route('salesorder'));
    })->name('2fa');
});
Route::get('/complete-registration', [RegisterController::class, 'completeRegistration'])->name('complete.registration');

# Reactivate Account
Route::get('/auth/reactivate', [LoginController::class, 'showReactivationForm'])->name('reactivate.form');
Route::post('/check/reactivation', [LoginController::class, 'checkReactivation'])->name('check.reactivation');

# Cookie
Route::post('/delete-cookie', [HomeController::class, 'deleteCookie'])->name('delete-cookie');
Route::get('/get-cookie', [HomeController::class, 'getCookie'])->name('get-cookie');
Route::post('/set-cookie', [HomeController::class, 'setCookie'])->name('set-cookie');


# SalesOrder
Route::resource("/salesorders", HomeController::class);

# Repeat Order
Route::post('/salesorders/repeatOrders', [HomeController::class, 'repeatOrder'])->name('salesorder.repeatOrder');
Route::post('/salesorders/updateOrderStatus', [HomeController::class, 'updateOrderStatus'])->name('salesorder.updateOrderStatus');

# Database log file route
Route::get('/log-data-from-database', [LogController::class, 'logDataFromDatabase']);
Route::get('/log-data-to-custom-log', [LogController::class, 'logDataToCustomDataLog']);

#Search
Route::get('/live-search', [HomeController::class, 'liveSearch'])->name('live-search');
