<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PagesController::class, 'index'])->name('index');

Route::prefix('auth')->name('auth.')->group(function () {
    Route::match(array('get', 'post'), 'login', [AuthController::class, 'login'])->name('login');
    Route::match(array('get', 'post'), 'register', [AuthController::class, 'register'])->name('register');
    Route::match(array('get', 'post'), 'activate', [AuthController::class, 'activate'])->name('activate');
    Route::match(array('get', 'post'), 'logout', [AuthController::class, 'logout'])->name('logout');
});

Route::prefix('app')->name('app.')->group(function () {
    Route::get('dashboard', [AppController::class, 'dashboard'])->name('dashboard');
    Route::get('settings', [AppController::class, 'settings'])->name('settings');
});
