<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Routing\Controller as BaseController;

class klantenHomeController extends BaseController
{
    public function index()
    {
        return Inertia::render('klantenHome');
    }
}