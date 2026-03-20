<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class klantenHomeControllerAPI extends Controller
{
        // alle data wordt gehashed
    public function anonymize(Request $request)
    {
        $user = Auth::user(); // get the currently logged-in user

        if (!$user) {
            return redirect('/login'); // safety check
        }

        $user->first_name = 'deleted';
        $user->last_name = 'deleted';
        $user->phone_number = null;
        $user->email = null;
        $user->customer_number = 'deleted';
        // $user->password = bcrypt($user->password); // optional, already hashed

        $user->save();

        auth()->logout();
        $request->session()->invalidate(); // destroys session
        $request->session()->regenerateToken(); // prevents CSRF reuse

        return redirect('/login');
    }
}
