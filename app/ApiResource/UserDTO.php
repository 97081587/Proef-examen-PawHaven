<?php

namespace App\ApiResource;
namespace App\State;

use ApiPlatform\Metadata\Get;

#[Get(uriTemplate: '/user/{id}')]
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