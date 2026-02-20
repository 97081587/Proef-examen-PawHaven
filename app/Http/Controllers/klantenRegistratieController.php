<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Inertia\Inertia;
use Illuminate\Routing\Controller;
use App\Services\KlantNummerCheck;

class klantenRegistratieController extends Controller
{

	public function index()
	{
		return Inertia::render('klantenRegistratie');
	}
	
	public function registreren(Request $request) {
        $validatedData = $request->validate([
			'regi_first_name' => ['required', 'string', 'max:255'],
			'regi_last_name' => ['required', 'string', 'max:255'],
			'regi_phone_number' => ['required', 'string', 'max:255'],
            'regi_email' => ['required', 'email', Rule::unique('users', 'email')],
            'regi_password' => ['required', 'min:3', 'confirmed'],
            'regi_customer_number' => 'required|string',
        ]);

        // $result = KlantNummerCheck::isValid($request->regi_customer_number);
        // if (!$result['valid']) {
        //     return back()->withErrors(['regi_customer_number' => $result['message']])->withInput();
        // }


        $register = new User();
		$register->first_name = $request['regi_first_name'];
		$register->last_name = $request['regi_last_name'];
		$register->phone_number = $request['regi_phone_number'];
        $register->email = $request['regi_email'];
        $register->password = bcrypt($request['regi_password']);
        $register->customer_number = $request['regi_customer_number'];

        // $register->password = bcrypt(request('RegiPassword'));

		// dd($register);

        $register->save();
        
        Session::put('registratie', $register);
        auth()->login($register);

        return redirect('/');
    }
}
