<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\klantenRegistratieController as KlantenRegistratie;
use App\Http\Controllers\logInController as logIn;
use App\Http\Controllers\klantenHomeController;

Route::get('/', [logIn::class, 'index']);
Route::post('/', [logIn::class, 'login']);

Route::get('/registratie', [KlantenRegistratie::class, 'index']);
Route::post('/registratie', [KlantenRegistratie::class, 'registreren']);

Route::get('/home', [klantenHomeController::class, 'index']);

