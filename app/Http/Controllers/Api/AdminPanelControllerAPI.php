<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Inertia\Inertia;

class AdminPanelControllerAPI extends Controller
{
    public function index()
    {
        return Inertia::render('AdminPanel');
    }
}