<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Routing\Controller;

class klantenController extends Controller
{
    public function index()
    {
        return Inertia::render('klantenHome');
    }

    	public function klantenLogIn()
	{
		return Inertia::render('klantenLogIn');
	}

    	public function klantenRegistratie()
	{
		return Inertia::render('klantenRegistratie');
	}

	public function klantenVoorkeuren()
	{
		return Inertia::render('klantenVoorkeuren');
	}

	public function klantenHuisdieren()
	{
		return Inertia::render('klantenHuisdieren');
	}
}