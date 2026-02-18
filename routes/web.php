<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\klantenRegistratieController as KlantenRegistratie;
use App\Http\Controllers\logInController as LogIn;
use App\Http\Controllers\klantenHomeController;

Route::get('/login', [LogIn::class, 'index'])->name('logIn');
Route::post('/login', [LogIn::class, 'login']);

Route::get('/registratie', [KlantenRegistratie::class, 'index']);
Route::post('/registratie', [KlantenRegistratie::class, 'registreren']);

Route::get('/', [klantenHomeController::class, 'index']);