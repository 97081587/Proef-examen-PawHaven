<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Inertia\Response;

class logInController
{
	public function index(): Response
	{
		return Inertia::render('klantenLogIn');
	}

	    public function login(Request $request) {
        $validatedData = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if (auth()->attempt(['email' => $validatedData['email'], 'password' => $validatedData['password']])) {
            $request->session()->regenerate();
        }

        return redirect('/');
    }
}