<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CustomerController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



// Auth::routes();

Route::post('/logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('logout');

Route::get('/adminlogin', 'App\Http\Controllers\Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'App\Http\Controllers\Auth\LoginController@login')->name('login');

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'] )->name('dashboard');

    // customers
    Route::get('/customers', [CustomerController::class, 'index'])->name('customers');
    Route::get('/customers/show/{id}', [CustomerController::class, 'show'])->name('show');
    
});

