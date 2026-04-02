<?php

namespace App\ApiResource;

use ApiPlatform\Metadata\Get;
use App\State\UserProvider;

#[Get(uriTemplate: '/user/{id}', provider: UserProvider::class)]
class UserDTO
{
    public function __construct(
        public readonly int $id,
        public readonly string $first_name,
        public readonly string $last_name,
        public readonly string $phone_number,
        public readonly string $email,
        public readonly string $customer_number,
    ) {
    }
}