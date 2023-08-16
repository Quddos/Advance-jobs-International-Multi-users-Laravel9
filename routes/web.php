<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Login;
use App\Http\Controllers\Register;




Route::middleware([
    'guest', 
    'throttle:20,1'
    ])-> group (function(){
    Route::get('/', [
        Login::class, 
        'index'
        ])-> name ('login');
    // Route::get('/register', 'register')->name('register');
    Route::get('/register',[
        Register::class,
        'index'
        ])->name ('register');
    Route::post('/register',[
        Register::class,
        'create'
        ])->name ('register-user');
    // Route::view('/password', 'password-forgot')->name('password');
    Route::get('/password-forgot',[
        Register::class,
        'forgot'
        ])->name ('password-forgot');
});