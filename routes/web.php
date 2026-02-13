<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\klantenRegistratieController as KlantenRegistratie;
use App\Http\Controllers\logInController as LogIn;


Route::get('/', [LogIn::class, 'index'])->name('logIn');

Route::get('/registratie', [KlantenRegistratie::class, 'index']);
Route::post('/registratie', [KlantenRegistratie::class, 'registreren']);

