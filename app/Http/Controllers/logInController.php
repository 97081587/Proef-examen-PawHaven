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
        $request->validate([
            'email' => 'required_without:customer_number|email',
            'password' => 'required_with:email',
            'customer_number' => 'required_without:email',
        ]);

        // Login via klantnummer
        if ($request->filled('customer_number')) {


        //alleen inloggen met klantnummer zonder wachtwoord
            $user = User::where('customer_number', $request->customer_number)->first();

            if ($user) {
                auth()->login($user);
                $request->session()->regenerate();

                dd($request->all());
                return redirect('/');
            }
        }

        return back()->withErrors([
            'login' => 'Klantnummer is onjuist.',
        ]);

        // Login via email + password
        if ($request->filled('email')) {
            if (auth()->attempt([
                'email' => $request->email,
                'password' => $request->password
            ])) {
                $request->session()->regenerate();

                dd($request->all());
                return redirect('/');
            }
        }

        return back()->withErrors([
            'login' => 'Inloggegevens zijn onjuist.',
        ]);
    }
}