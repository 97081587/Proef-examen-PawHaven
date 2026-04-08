<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Inertia\Inertia;
// use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controller as BaseController;

class HeaderControllerAPI extends BaseController
{
    //uitlog functie
    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();

        return response()->json([
            'message' => 'Uitgelogd'
        ]);
    }
}