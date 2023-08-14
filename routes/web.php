<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Login;




Route::get('/', [
    Login::class, 
    'index'
    ])-> name ('login');

Route::view('/password', 'login.password')->name('password');
Route::view('/register', 'login.register')->name('register');