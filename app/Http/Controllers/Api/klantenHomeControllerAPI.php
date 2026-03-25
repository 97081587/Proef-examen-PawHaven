<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class klantenHomeControllerAPI extends Controller
{
        // alle data wordt geanonimiseerd
    public function anonymize(Request $request)
    {
        // dd(Auth::user());
        $user = Auth::user(); // get the currently logged-in user
        
        if (!$user) {
            return response()->json([
                'message' => 'Geen ingelogde gebruiker gevonden'
            ], 401);
        }

        $user->first_name = 'deleted';
        $user->last_name = 'deleted';
        $user->phone_number = 'deleted';
        $user->email = 'deleted_' . $user->id . '@anon.local'; // unique email to prevent conflicts
        $user->customer_number = 'anon_' . $user->id;
        // $user->password = bcrypt($user->password); // optional, already hashed

        $user->save();

        auth()->logout();
        // $request->session()->invalidate(); // destroys session
        $request->session()->regenerateToken(); // prevents CSRF reuse

        return response()->json([
            'message' => 'Account geanonimiseerd'
        ]);
    }
}
