<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\KlantenRegistratieControllerAPI;
use App\Http\Controllers\Api\KlantenLogInControllerAPI;
use App\Http\Controllers\Api\KlantenHomeControllerAPI;
use App\Http\Controllers\HeaderControllerAPI;

//registratie (maakt een session aan)
Route::post('/register', [KlantenRegistratieControllerAPI::class, 'store']);

Route::post('/login', [KlantenLogInControllerAPI::class, 'login']);

Route::post('/delete-account', [KlantenHomeControllerAPI::class, 'anonymize'])
    ->middleware('auth');

//header
Route::post('/logout', [HeaderControllerAPI::class, 'logout'])->name('logout');