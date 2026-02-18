<?php

namespace App\Services;

use App\Models\User;

class KlantNummerGenerator
{
    /**
     * Generate a unique customer number.
     * Default format: 6-digit numeric
     */
    public static function generate(int $length = 4): string
    {
        do {

             // Random modulo 13, zero-padded
            $number = str_pad(rand(0, pow(10, $length) - 1) % 13, $length, '0', STR_PAD_LEFT);


            // prefix numbers
            $number = '2401160930' . $number;

            // Check if it already exists in users table
        } while (User::where('customerNumber', $number)->exists());

        return $number;
    }
}
