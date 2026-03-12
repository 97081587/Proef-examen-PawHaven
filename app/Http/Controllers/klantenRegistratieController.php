<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Inertia\Inertia;
use Illuminate\Routing\Controller;
use App\Services\KlantNummerCheck;

class klantenRegistratieController extends Controller
{

	public function index()
	{
		return Inertia::render('klantenRegistratie');
	}
}
