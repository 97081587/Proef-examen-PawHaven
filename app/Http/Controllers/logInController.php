<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Routing\Controller;
use App\Models\User;

class logInController extends Controller
{
	public function index()
	{
		return Inertia::render('klantenLogIn');
	}

	public function login(Request $request) {

        // Login via klantnummer
        if ($request->filled('customer_number')) {
            $request->validate([
                'customer_number' => 'required_without:email',
            ]);

            //alleen inloggen met klantnummer zonder wachtwoord
            $user = User::where('customer_number', $request->customer_number)->first();

            if ($user) {
                auth()->login($user);
                $request->session()->regenerate();

                // dd($request->all());
                return redirect('/');
            }
        }

        return back()->withErrors([
            'login' => 'Klantnummer is onjuist.',
        ]);

        // Login via email + password
        if ($request->filled('email')) {
            $request->validate([
                'email' => 'required_without:customer_number|email',
                'password' => 'required_with:email',
            ]);

            if (auth()->attempt($request->only('email', 'password'))) {
                $request->session()->regenerate();
                // dd($request->all());
                return redirect('/');
            }
        }

        return back()->withErrors([
            'login' => 'Inloggegevens zijn onjuist.',
        ]);
    }
}