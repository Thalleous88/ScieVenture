<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticationController;


Route::get('/', function () {
    return view('welcome');
});

Route::controller(AuthenticationController::class)->group(function() {
    Route::get('/register', 'getRegister')->name('getRegister');
    Route::post('/register', 'register')->name('register');
    Route::get('/login', 'getLogin')->name('getLogin');
    Route::post('/login', 'login')->name('login');
    Route::post('/logout', 'logout')->name('logout');
});
