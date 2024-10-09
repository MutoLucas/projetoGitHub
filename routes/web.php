<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Login;

Route::get('/', function () {return view('login');})->name('login.home');
Route::get('/cadastro', function () {return view('cadastro');})->name('cadastro');
Route::post('/auth', [Login::class,'storeUser'])->name('login.auth');
