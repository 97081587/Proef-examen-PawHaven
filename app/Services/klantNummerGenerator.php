<?php

namespace App\Services;

use App\Models\User;

class CustomerNumberService
{
    /**
     * Generate a unique customer number.
     * Default format: 6-digit numeric
     */
    public static function generate(int $length = 6): string
    {
        do {
            // Generate a random number of given length
            $number = '';
            for ($i = 0; $i < $length; $i++) {
                $number .= rand(0, 9);
            }



            // prefix
            $number = '2401160930' . $number;

            // Check if it already exists in users table
        } while (User::where('customer_number', $number)->exists());

        return $number;
    }
}
