<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Routing\Controller;

class klantenHomeController extends Controller
{
    public function index()
    {
        return Inertia::render('klantenHome');
    }
}

