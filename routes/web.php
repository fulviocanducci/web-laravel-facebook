<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [LoginController::class, "index"]);
Route::post('/login/authentication', [LoginController::class, "authentication"]);

Route::get('/login/facebook', [LoginController::class, "facebook"]);
Route::get('/login/facebook/callback', [LoginController::class, "facebookCallback"]);
