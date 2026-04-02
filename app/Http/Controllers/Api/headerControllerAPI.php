<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controller as BaseController;

class HeaderControllerAPI extends BaseController
{
    //uitlog functie
    // public function logout(Request $request)
    // {
    //     auth()->logout();
    //     $request->session()->invalidate(); // destroys session
    //     $request->session()->regenerateToken(); // prevents CSRF reuse
    //     return redirect('/login');
    // }
}