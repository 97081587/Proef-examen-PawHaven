<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Inertia\Response;

class klantenRegistratieController
{

	public function index(): Response
	{
		return Inertia::render('klantenRegistratie');
	}
	
	public function registreren(Request $request) {
        $validatedData = $request->validate([
			'RegiFirstName' => ['required', 'string', 'max:255'],
			'RegiLastName' => ['required', 'string', 'max:255'],
			'RegiPhoneNumber' => ['required', 'string', 'max:255'],
            'RegiEmail' => ['required', 'email', Rule::unique('users', 'email')],
            'RegiPassword' => ['required', 'min:3']
        ]);

        $register = new User();
		$register->firstName = $request['RegiFirstName'];
		$register->lastName = $request['RegiLastName'];
		$register->phoneNumber = $request['RegiPhoneNumber'];
        $register->email = $request['RegiEmail'];
        $register->password = $request['RegiPassword'];
        
        $register->password = bcrypt(request('RegiPassword'));

		dd($register);

        $register->save();
        
        Session::put('registratie', $register);

        auth()->login($register);

        return redirect()->route('/');;
    }
}
