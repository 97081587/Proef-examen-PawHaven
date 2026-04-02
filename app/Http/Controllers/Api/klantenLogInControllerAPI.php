<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class klantenLogInControllerAPI extends Controller
{
    public function login(Request $request) {

        //alleen inloggen met klantnummer zonder wachtwoord
        if ($request->filled('customer_number')) {

            $user = User::where('customer_number', $request->customer_number)->first();

            if ($user) {
                return response()->json([
                    // 'message' => 'Succesvol ingelogd',
                    'user' => $user
                ]);

                // dd($request->all());
            }

            return response()->json([
                'message' => 'Klantnummer is onjuist.'
            ]);
        }

        // Login via email + password
        if ($request->filled('email')) {
            //  dd($request->all());
            // $request->validate([
            //     'email' => 'required_without:customer_number|email',
            //     'password' => 'required_with:email',
            // ]);

            // if (auth()->attempt($request->only('email', 'password'))) {
            //     $request->session()->regenerate();
            //     // dd($request->all());
            //     return redirect('/');
            // }

          return response()->json([
                'message' => 'Email of wachtwoord is onjuist.'
            ]);
        }

        return response()->json([
            'message' => 'Geen login gegevens ontvangen.'
        ]);
    }
}
