<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Login;

Route::get('/', function () {return view('login');})->name('login.home');
Route::get('/cadastro', function () {return view('cadastro');})->name('cadastro');
Route::post('/auth', [Login::class,'storeUser'])->name('login.auth');
Route::post('/logar', [Login::class, 'logar'])->name('logar');
Route::get('/home', function () {return view('bemvindo');})->name('bemvindo');
Route::get('/logout', [Login::class,'logout'])->name('logout');
