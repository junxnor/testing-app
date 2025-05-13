<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthManager;
use Inertia\Inertia;

Route::get('/', function () {
    return view('landing');
})->name('landing');

Route::get('home', function () {
    return view('home');
})->name('home');

Route::get('login', [AuthManager::class, 'login'])->name('login');

Route::get('register', function () {
    return redirect()->route('login');
});

Route::post('login', [
    AuthManager::class,
    'loginPost'
])->name('login.post');

Route::post('/register', [AuthManager::class, 'registerPost'])->name('register.post');

Route::get('logout', function () {
    Auth::logout();
    return redirect()->route('landing');
})->name('logout');
