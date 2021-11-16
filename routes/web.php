<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\RegisterController;

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

Route::get('/', [PagesController::class, 'index']);
Route::get('article', [PagesController::class, 'articleSite']);

// Route::get('login', [LoginController::class, 'index'])->name('login');
Route::get('login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('login', [LoginController::class, 'authenticate']);
Route::get('logout', [LoginController::class, 'logout']);


Route::get('dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::post('dasborad', [DashboardController::class, 'generateResult']);

// Route::get('dashboard', [DashboardController::class, 'index']);

// Login Tab
// Route::get('dashboard', [CustomAuthController::class, 'dasboard']);
// Route::get('login', [CustomAuthController::class, 'index'])->name('login');
// Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
// Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
// Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
// Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');

Route::get('register', [RegisterController::class, 'index']);
