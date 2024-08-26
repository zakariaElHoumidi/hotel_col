<?php

use App\Http\Controllers\AuthController;
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

Route::get('/', function () {
    return view('platform.index');
})->name('platform.index');

Route::get('login',[AuthController::class,'login'])->name('auth.login');
Route::get('register',[AuthController::class,'register'])->name('auth.register');
Route::post('handleLogin',[AuthController::class,'handleLogin'])->name('auth.handleLogin');
Route::post('handleRegister',[AuthController::class,'handleRegister'])->name('auth.handleRegister');
