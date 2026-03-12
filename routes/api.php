<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;

// Route::get('/test', function () {
//     return response()->json([
//         'message' => 'API werkt!'
//     ]);
// });

Route::get('/users', [UserController::class, 'index']);
Route::post('/users', [UserController::class, 'store']);