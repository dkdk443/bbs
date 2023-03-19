<?php

use App\Http\Controllers\ThreadController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
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

Route::get('/', [ThreadController::class, 'index'])->name('top');
Route::get('/thread/{thread}', [ThreadController::class, 'show'])->name('thread.show');
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::get('/register', [RegisterController::class, 'register'])->name('register');
Route::post('/authenticate', [LoginController::class, 'authenticate'])->name('authenticate');
Route::post('/registUser', [RegisterController::class, 'registUser'])->name('registUser');
Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');
