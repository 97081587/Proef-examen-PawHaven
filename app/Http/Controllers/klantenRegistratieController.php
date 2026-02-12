<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Inertia\Inertia;

class klantenRegistratieController extends Controller
{

	public function index()
	{
		return Inertia::render('klantenRegistratie');
	}
	
	public function registreren(Request $request) {
        $validatedData = $request->validate([
			'RegiFirstName' => ['required', 'string', 'max:255'],
			'RegiLastName' => ['required', 'string', 'max:255'],
			'RegiPhoneNumber' => ['required', 'string', 'max:255'],
            'RegiEmail' => ['required', 'email', Rule::unique('users', 'email')],
            'RegiPassword' => ['required', 'min:3', 'confirmed'],
        ]);

        $register = new User();
		$register->firstName = $request['RegiFirstName'];
		$register->lastName = $request['RegiLastName'];
		$register->phoneNumber = $request['RegiPhoneNumber'];
        $register->email = $request['RegiEmail'];
        $register->password = $request['RegiPassword'];
        
        $register->password = bcrypt(request('RegiPassword'));

		// dd($register);

        $register->save();
        
        Session::put('registratie', $register);
        auth()->login($register);

        return redirect()->route('/');;
    }
}
