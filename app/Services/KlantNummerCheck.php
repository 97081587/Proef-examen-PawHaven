<?php

namespace App\Services;

use App\Models\User;

class KlantNummerCheck
{
    private const PREFIX = '2401160930';

    /**
     * Check if number exists in database
     */
    public static function exists(string $number): bool
    {
        return User::where('customer_number', $number)->exists();
    }

    /**
     * Validate prefix + modulo rule
     */
    public static function isValid(string $number): array
    {
        // 1️⃣ Check prefix
        if (!str_starts_with($number, self::PREFIX)) {
            return [
                'valid' => false,
                'message' => 'Customer number must start with ' . self::PREFIX,
            ];
        }

        // 2️⃣ Extract numeric part after prefix
        $numericPart = substr($number, strlen(self::PREFIX));

        if (!ctype_digit($numericPart)) {
            return [
                'valid' => false,
                'message' => 'Customer number contains invalid characters.',
            ];
        }

        // 3️⃣ Modulo 13 check
        if (((int)$numericPart % 13) !== 0) {
            return [
                'valid' => false,
                'message' => 'Customer number does not satisfy modulo 13 rule.',
            ];
        }

        // 4️⃣ Check uniqueness
        if (self::exists($number)) {
            return [
                'valid' => false,
                'message' => 'Customer number already exists.',
            ];
        }

        return [
            'valid' => true,
            'message' => 'Customer number is valid and available.',
        ];
    }
}
