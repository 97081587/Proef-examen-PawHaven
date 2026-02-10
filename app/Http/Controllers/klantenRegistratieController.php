<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Inertia\Response;

class klantenRegistratieController
{
	public function index(): Response
	{
		return Inertia::render('klantenRegistratie');
	}
}
