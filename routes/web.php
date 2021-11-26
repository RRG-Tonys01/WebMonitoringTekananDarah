<?php

use App\Http\Controllers\CheckController;
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
Route::get('about', [PagesController::class, 'aboutIndex']);

// Authenticate GET
Route::get('login', [LoginController::class, 'index'])->name('login');
Route::get('register', [RegisterController::class, 'index']);
Route::get('dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::get('control', [CheckController::class, 'index']);
Route::get('logout', [LoginController::class, 'logout']);
Route::get('result', [PagesController::class, 'result']);



// Authenticate POST
Route::post('login', [LoginController::class, 'authenticate']);
Route::post('register', [RegisterController::class, 'store']);
Route::post('dashboard', [DashboardController::class, 'tester']);
Route::post('tester', [DashboardController::class, 'tester']);
