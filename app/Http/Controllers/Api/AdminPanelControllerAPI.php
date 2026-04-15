<?php

namespace App\Http\Controllers\Api;

use Inertia\Inertia;
use Illuminate\Routing\Controller as BaseController;

class AdminPanelControllerAPI extends BaseController
{
    public function fetchAll()
    {
        // Fetch all data for the admin panel
        $data = [
            'users' => \App\Models\User::query()->get([
                'first_name',
                'last_name',
                'phone_number',
                'email',
            ]),
        ];

        return response()->json($data);
    }
}