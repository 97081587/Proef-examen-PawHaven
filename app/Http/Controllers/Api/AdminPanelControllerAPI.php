<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Routing\Controller as BaseController;

class AdminPanelControllerAPI extends BaseController
{
    public function fetchAll()
    {
        // Fetch all data for the admin panel
        $data = [
            'users' => \App\Models\User::all(),
            // 'orders' => \App\Models\Order::all(),
            // 'products' => \App\Models\Product::all(),
        ];

        return response()->json($data);
    }
}