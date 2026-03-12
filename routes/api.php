<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\KlantRegistratieController;

// Route::get('/test', function () {
//     return response()->json([
//         'message' => 'API werkt!'
//     ]);
// });

Route::get('/users', [UserController::class, 'index']);
Route::post('/users', [UserController::class, 'store']);

Route::post('/register', [KlantRegistratieController::class, 'store']);