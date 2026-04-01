<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KlantenRegistratieController;
use App\Http\Controllers\LogInController;
use App\Http\Controllers\KlantenHomeController;
// api controllers
// use App\Http\Controllers\Api\HeaderControllerAPI;
// use App\Http\Controllers\Api\KlantenLogInControllerAPI;
// use App\Http\Controllers\Api\KlantenHomeControllerAPI;
// use App\Http\Controllers\Api\KlantenRegistratieControllerAPI;

//login
Route::get('/login', [LogInController::class, 'index'])->name('login');

//registratie
Route::get('/registratie', [KlantenRegistratieController::class, 'index']);

//home
Route::get('/', [KlantenHomeController::class, 'index'])->middleware('auth');

//api controllers zitten hier voor de ingelogde session
// Route::post('/register', [KlantenRegistratieControllerAPI::class, 'store']);

// Route::post('/login', [KlantenLogInControllerAPI::class, 'login']);

// Route::post('/delete-account', [KlantenHomeControllerAPI::class, 'anonymize'])
//     ->middleware('auth');

// Route::post('/logout', [HeaderControllerAPI::class, 'logout'])->name('logout');