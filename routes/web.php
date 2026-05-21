<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KlantenController;
use App\Http\Controllers\AdminPanelController;

//login
Route::get('/login', [KlantenController::class, 'klantenLogIn'])->name('login');

//registratie
Route::get('/registratie', [KlantenController::class, 'klantenRegistratie']);

//home
Route::get('/', [KlantenController::class, 'index']);

//merk voorkeuren
Route::get('/merk-voorkeuren', [KlantenController::class, 'klantenVoorkeuren']);

//klanten huisdieren
Route::get('/huisdieren', [KlantenController::class, 'klantenHuisdieren']);

//huisdieren registratie
Route::get('/huisdierenRegistratie', [KlantenController::class, 'klantenHuisdierenRegistratie']);

//admin panel
Route::get('/admin', [AdminPanelController::class, 'fetchAllIndex']);