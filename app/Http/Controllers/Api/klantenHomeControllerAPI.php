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
        $user = Auth::user(); // get the currently logged-in user

        if (!$user) {
            return response()->json([
                'message' => 'Geen ingelogde gebruiker gevonden'
            ], 401);
        }

        $user->first_name = 'deleted';
        $user->last_name = 'deleted';
        $user->phone_number = null;
        $user->email = 'deleted_' . $user->id . '@anon.local'; // unique email to prevent conflicts
        $user->customer_number = 'deleted';
        // $user->password = bcrypt($user->password); // optional, already hashed

        $user->save();

        auth()->logout();
        $request->session()->invalidate(); // destroys session
        $request->session()->regenerateToken(); // prevents CSRF reuse

        return response()->json([
            'message' => 'Account geanonimiseerd'
        ]);
    }
}
