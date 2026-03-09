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
    public function klantnummer(Request $request)
    {
        $request->validate([
            'klantnummer' => 'required_without:email',
        ]);
        // $klantnummer = auth()->user()->customer_number;
        // return Inertia::render('header', ['klantnummer' => $klantnummer]);

        $user = Auth::user();

        return Inertia::render('header', [
            'klantnummer' => $user->customer_number,
        ]);
    }
}