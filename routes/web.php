<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\klantenRegistratieController;

Route::get('/', [klantenRegistratieController::class, 'index'])->name('registratieKlanten');

