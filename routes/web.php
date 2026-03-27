<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\klantenRegistratieController as KlantenRegistratie;
use App\Http\Controllers\logInController;
use App\Http\Controllers\klantenHomeController as KlantenHome;
// use App\Http\Controllers\Api\headerControllerAPI as header;
use App\Http\Controllers\Api\klantenLogInControllerAPI;
use App\Http\Controllers\Api\klantenHomeControllerAPI;

//login
Route::get('/login', [logInController::class, 'index'])->name('login');

// zit hier voor de session
Route::post('/login', [klantenLogInControllerAPI::class, 'login']);

//registratie
Route::get('/registratie', [KlantenRegistratie::class, 'index']);

//home
Route::get('/', [KlantenHome::class, 'index']);

// zit hier voor de session
Route::post('/delete-account', [klantenHomeControllerAPI::class, 'anonymize'])
    ->middleware('auth');

//header
// Route::post('/logout', [header::class, 'logout'])->name('logout');