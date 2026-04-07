<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class klantenLogInControllerAPI extends Controller
{
    public function login(Request $request) {

        //alleen inloggen met klantnummer zonder wachtwoord
        if ($request->filled('customer_number')) {

            $user = User::where('customer_number', $request->customer_number)->first();

            if (!$user) {
                return response()->json([
                    'message' => 'Klantnummer is onjuist.'
                ], 401);
            }

            $token = $user->createToken('auth_token')->plainTextToken;

             return response()->json([
                    'message' => 'Succesvol ingelogd',
                    'token' => $token,
                    'user' => $user
                ]);
        }

        // Login via email + password
        if ($request->filled('email')) {
  
             $user = User::where('email', $request->email)->first();

            if (!$user || !Hash::check($request->password, $user->password)) {
                return response()->json([
                    'message' => 'Email of wachtwoord is onjuist.'
                ], 401);
            }

            $token = $user->createToken('auth_token')->plainTextToken;

            return response()->json([
                'message' => 'Succesvol ingelogd',
                'token' => $token,
                'user' => $user
            ]);
        }
    }
}
