<?php

namespace App\Services;

use App\Models\User;

class KlantNummerGenerator
{
    /**
     * Check if a customer number exists.
     */
    public static function exists(string $number): bool
    {
        return User::where('customer_number', $number)->exists();
    }
}
