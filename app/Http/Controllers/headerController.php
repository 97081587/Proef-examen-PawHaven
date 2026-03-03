<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Routing\Controller as BaseController;

class klantenHomeController extends BaseController
{
    //uitlog functie
    public function logOut()
    {
        auth()->logout();
        return redirect('/login');
    }

    //klantnummer ophalen en laten zien in header
    public function klantNummer()
    {
        $klantNummer = auth()->user()->customer_number;
        return Inertia::render('header', ['klantNummer' => $klantNummer]);
    }
}