<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Inertia\Response;

class logInController
{
	public function index(): Response
	{
		return Inertia::render('klantenLogIn');
	}
}