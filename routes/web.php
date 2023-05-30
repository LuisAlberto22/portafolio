<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
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

Route::get('/', IndexController::class);

Route::get('/login', [LoginController::class, 'logIn'])->name('login');

Route::post('/contacto', [ContactController::class, 'sendMail'])->name('send.mail');

Route::middleware('auth')->group(function () {
    Route::post('/logout', [LoginController::class, 'logOut'])->name('logout');
});
