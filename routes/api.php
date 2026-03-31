<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\KlantenRegistratieControllerAPI;
// use App\Http\Controllers\Api\klantenLogInControllerAPI;
// use App\Http\Controllers\Api\klantenHomeControllerAPI;
// use App\Http\Controllers\HeaderControllerAPI;

//registratie (maakt een session aan)
Route::post('/register', [KlantenRegistratieControllerAPI::class, 'store']);


// Route::post('/login', [klantenLogInControllerAPI::class, 'login']);

// Route::post('/delete-account', [klantenHomeControllerAPI::class, 'anonymize'])
//     ->middleware('auth');

// //header
// Route::post('/logout', [HeaderControllerAPI::class, 'logout'])->name('logout');