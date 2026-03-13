<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\KlantenRegistratieControllerAPI;
use App\Http\Controllers\Api\klantenLogInControllerAPI;
use App\Http\Controllers\Api\klantenHomeControllerAPI;

// Route::get('/test', function () {
//     return response()->json([
//         'message' => 'API werkt!'
//     ]);
// });

Route::get('/users', [UserController::class, 'index']);
Route::post('/users', [UserController::class, 'store']);

Route::post('/register', [KlantenRegistratieControllerAPI::class, 'store']);

Route::post('/login', [klantenLogInControllerAPI::class, 'login']);

Route::post('/', [klantenHomeControllerAPI::class, 'index']);