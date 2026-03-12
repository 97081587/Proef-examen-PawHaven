<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controller as BaseController;

class klantenHomeController extends BaseController
{
    public function index()
    {
        return Inertia::render('klantenHome');
    }

    // data wordt gehashed behalve klantennummer
    public function dataHash(Request $request)
    {
        $user = Auth::user(); // get the currently logged-in user

        if (!$user) {
            return redirect('/login'); // safety check
        }

        $user->first_name = bcrypt($user->first_name);
        $user->last_name = bcrypt($user->last_name);
        $user->phone_number = bcrypt($user->phone_number);
        $user->email = bcrypt($user->email);
        $user->customer_number = bcrypt($user->customer_number);
        // $user->password = bcrypt($user->password); // optional, already hashed

        $user->save();

        auth()->logout();
        $request->session()->invalidate(); // destroys session
        $request->session()->regenerateToken(); // prevents CSRF reuse

        return redirect('/login');
    }
}

