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
        $validatedData = $request->validate([
            'email' => 'required',
            'password' => 'required',
            'klantNummer' => 'required'
        ]);

        if (auth()->attempt(['email' => $validatedData['email'], 'password' => $validatedData['password'], 'customerNumber' => $validatedData['klantNummer']])) {
            $request->session()->regenerate();
        }

        return redirect('/home');
    }
}