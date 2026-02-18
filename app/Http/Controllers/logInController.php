<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Routing\Controller;

class logInController extends Controller
{
	public function index()
	{
		return Inertia::render('klantenLogIn');
	}

	public function login(Request $request) {
        $request->validate([
            'email' => 'required_without:klantNummer|email',
            'password' => 'required_with:email',
            'klantNummer' => 'required_without:email',
        ]);

        // if (auth()->attempt(['email' => $validatedData['email'], 'password' => $validatedData['password'], 'customerNumber' => $validatedData['klantNummer']])) {
        //     $request->session()->regenerate();
        // }

        // return redirect('/home');

    if ($request->filled('klantNummer')) {
        $user = \App\Models\User::where('customerNumber', $request->klantNummer)->first();

        if ($user) {
            auth()->login($user);
            $request->session()->regenerate();
            return redirect('/home');
        }
    }

    // Login via email + password
    if ($request->filled('email')) {
        if (auth()->attempt([
            'email' => $request->email,
            'password' => $request->password
        ])) {
            $request->session()->regenerate();
            return redirect('/home');
        }
    }

    return back()->withErrors([
        'login' => 'Inloggegevens zijn onjuist.',
    ]);
    }
}