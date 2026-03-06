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
            'email' => 'required_without:klantNummer|email',
            'password' => 'required_with:email',
            'klantNummer' => 'required_without:email',
        ]);

        if ($request->filled('klantNummer')) {
            $user = User::where('customer_number', $request->klantNummer)->first();

            if ($user) {
                auth()->login($user);
                $request->session()->regenerate();
                return redirect('/');
            }

            return back()->withErrors([
                'login' => 'Klantnummer is onjuist.',
            ]);
        }

        // Login via email + password
        if ($request->filled('email')) {
            if (auth()->attempt([
                'email' => $request->email,
                'password' => $request->password
            ])) {
                $request->session()->regenerate();
                return redirect('/');
            }
        }

        return back()->withErrors([
            'login' => 'Inloggegevens zijn onjuist.',
        ]);
    }
}