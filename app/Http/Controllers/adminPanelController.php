<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Routing\Controller as BaseController;

class AdminPanelController extends BaseController
{
        public function fetchAllIndex()
    {
        return Inertia::render('adminPanel', [
            'users' => \App\Models\User::query()->get([
                'id',
                'first_name',
                'last_name',
                'phone_number',
                'email',
            ]),
        ]);
    }
}
