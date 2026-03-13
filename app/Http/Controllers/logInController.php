<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Routing\Controller;

class LogInController extends Controller
{
	public function index()
	{
		return Inertia::render('klantenLogIn');
	}
}