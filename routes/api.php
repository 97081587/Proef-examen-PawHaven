<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\KlantenRegistratieControllerAPI;
// use App\Http\Controllers\Api\klantenLogInControllerAPI;
// use App\Http\Controllers\Api\klantenHomeControllerAPI;
use App\Http\Controllers\headerControllerAPI as header;

//registratie (maakt een session aan)
Route::post('/register', [KlantenRegistratieControllerAPI::class, 'store']);