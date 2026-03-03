<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controller as BaseController;

class headerController extends BaseController
{
    //uitlog functie
    public function logout(Request $request)
    {
        auth()->logout();
        $request->session()->invalidate(); // destroys session
        $request->session()->regenerateToken(); // prevents CSRF reuse
        return redirect('/login');
    }

    //klantnummer ophalen en laten zien in header
    public function klantNummer()
    {
        // $klantNummer = auth()->user()->customer_number;
        // return Inertia::render('home', ['klantNummer' => $klantNummer]);

        $user = Auth::user();

        return Inertia::render('Dashboard', [
            'klantnummer' => $user->customer_number,
        ]);
    }
}