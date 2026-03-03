<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class klantenHomeController extends BaseController
{
    public function index()
    {
        return Inertia::render('klantenHome');
    }

    // data wordt gehashed behalve klantennummer
    public function dataHash(Request $request)
    {


        $register->first_name = bcrypt($request['regi_first_name']);
		$register->last_name = bcrypt($request['regi_last_name']);
		$register->phone_number = bcrypt($request['regi_phone_number']);
        $register->email = bcrypt($request['regi_email']);
        $register->password = bcrypt($request['regi_password']);

        $register->save();

        auth()->logout();
        $request->session()->invalidate(); // destroys session
        $request->session()->regenerateToken(); // prevents CSRF reuse

        return redirect('/login');
    }
}

