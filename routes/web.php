<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\klantenRegistratieController as KlantenRegistratie;
use App\Http\Controllers\LogInController;
use App\Http\Controllers\klantenHomeController as KlantenHome;

use App\Http\Controllers\Api\HeaderControllerAPI;
use App\Http\Controllers\Api\klantenLogInControllerAPI;
use App\Http\Controllers\Api\klantenHomeControllerAPI;

//login
Route::get('/login', [LogInController::class, 'index'])->name('login');

//registratie
Route::get('/registratie', [KlantenRegistratie::class, 'index']);

//home
Route::get('/', [KlantenHome::class, 'index'])->middleware('auth');


//moet waarschijnlijk in api.php
// zit hier voor de session
Route::post('/login', [klantenLogInControllerAPI::class, 'login']);

// zit hier voor de session
Route::post('/delete-account', [klantenHomeControllerAPI::class, 'anonymize'])
    ->middleware('auth');

//header
Route::post('/logout', [HeaderControllerAPI::class, 'logout'])->name('logout');