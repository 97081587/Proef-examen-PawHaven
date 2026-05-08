<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KlantenController;
// use App\Http\Controllers\AdminPanelController;
use App\Http\Controllers\Api\AdminPanelControllerAPI;

//login
Route::get('/login', [KlantenController::class, 'klantenLogIn'])->name('login');

//registratie
Route::get('/registratie', [KlantenController::class, 'klantenRegistratie']);

//home
Route::get('/', [KlantenController::class, 'index']);

//admin panel
// Route::get('/admin', [AdminPanelController::class, 'index']);
Route::get('/admin', [AdminPanelControllerAPI::class, 'fetchAll']);