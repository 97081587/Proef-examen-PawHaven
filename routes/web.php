<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KlantenRegistratieController;
use App\Http\Controllers\LogInController;
use App\Http\Controllers\KlantenHomeController;
use App\Http\Controllers\AdminPanelController;

//login
Route::get('/login', [LogInController::class, 'index'])->name('login');

//registratie
Route::get('/registratie', [KlantenRegistratieController::class, 'index']);

//home
Route::get('/', [KlantenHomeController::class, 'index']);

//admin panel
Route::get('/admin', [AdminPanelController::class, 'index']);