<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->middleware('auth:web')->name('home.index');

Route::get('/login', [LoginController::class, "index"])->name('login');
Route::get('/logout', [LoginController::class, "logout"])->name('logout');
Route::post('/login/authentication', [LoginController::class, "authentication"])->name('login.authentication');

Route::get('/login/facebook', [LoginController::class, "facebook"])->name('login.facebook');
Route::get('/login/facebook/callback', [LoginController::class, "facebookCallback"])->name('login.facebook.callback');
