<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\klantenRegistratieController as KlantenRegistratie;
use App\Http\Controllers\logInController as LogIn;
use App\Http\Controllers\Api\klantenLogInControllerAPI;
use App\Http\Controllers\klantenHomeController as KlantenHome;
use App\Http\Controllers\headerController as header;

//login
Route::get('/login', [LogIn::class, 'index'])->name('logIn');
Route::post('/login', [klantenLogInControllerAPI::class, 'login']);

//registratie
Route::get('/registratie', [KlantenRegistratie::class, 'index']);

//home
Route::get('/', [KlantenHome::class, 'index']);
Route::post('/delete-account', [klantenHomeControllerAPI::class, 'anonymize']
    ->middleware('auth'));

//header
// Route::post('/logout', [header::class, 'logout'])->name('logout');