<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Api\UserController;

use App\Http\Controllers\Api\KlantenRegistratieControllerAPI;
use App\Http\Controllers\Api\KlantenLogInControllerAPI;
use App\Http\Controllers\Api\KlantenHomeControllerAPI;
use App\Http\Controllers\Api\HeaderControllerAPI;
use App\Http\Controllers\Api\AdminPanelControllerAPI;

//login
Route::post('/login', [KlantenLogInControllerAPI::class, 'login']);

//registratie
Route::post('/register', [KlantenRegistratieControllerAPI::class, 'store']);

//home
Route::delete('/delete-account', [KlantenHomeControllerAPI::class, 'anonymize'])
    ->middleware('auth:sanctum');

//header
Route::post('/logout', [HeaderControllerAPI::class, 'logout'])->middleware('auth:sanctum');

//admin panel
Route::post('/admin', [AdminPanelControllerAPI::class, 'fetchAll']);