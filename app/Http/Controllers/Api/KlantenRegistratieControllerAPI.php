<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Services\KlantNummerCheck;

class KlantenRegistratieControllerAPI extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'phone_number' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'min:3', 'confirmed'],
            'customer_number' => ['required', 'string'],
        ]);

        $result = KlantNummerCheck::isValid($request->customer_number);

        if (!$result['valid']) {
            return response()->json([
                'message' => $result['message']
            ], 422);
        }

        $user = User::create([
            'first_name' => $validatedData['first_name'],
            'last_name' => $validatedData['last_name'],
            'phone_number' => $validatedData['phone_number'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
            'customer_number' => $validatedData['customer_number'],
        ]);

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'message' => 'Klant succesvol aangemaakt',
            'data' => $user,
            'token' => $token
        ], 201);
    }
}
