<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\klantenRegistratieController;
use App\Http\Controllers\logInController;


Route::get('/', [logInController::class, 'index'])->name('logIn');

Route::get('/registratie', [klantenRegistratieController::class, 'index']);
Route::post('/registratie', [klantenRegistratieController::class, 'registreren']);

