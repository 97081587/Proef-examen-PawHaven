<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Inertia\Inertia;
use Illuminate\Routing\Controller;

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
            'RegiCustomerNumber' => ['nullable', 'string', 'max:255', Rule::exists('users', 'customer_number')],
        ]);

        $register = new User();
		$register->first_name = $request['RegiFirstName'];
		$register->last_name = $request['RegiLastName'];
		$register->phone_number = $request['RegiPhoneNumber'];
        $register->email = $request['RegiEmail'];
        $register->password = $request['RegiPassword'];
        $register->customer_number = $request['RegiCustomerNumber'];

        // $register->password = bcrypt(request('RegiPassword'));

		// dd($register);

        $register->save();
        
        Session::put('registratie', $register);
        auth()->login($register);

        return redirect()->route('/');
    }
}
