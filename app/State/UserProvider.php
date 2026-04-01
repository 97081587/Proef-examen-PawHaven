<?php

namespace App\State;

use ApiPlatform\Metadata\Operation;
use ApiPlatform\State\ProviderInterface;
use App\Models\User as UserModel;
use App\ApiResource\UserDTO;

final class UserProvider implements ProviderInterface
{
    public function provide(Operation $operation, array $uriVariables = [], array $context = []): UserDTO
    {
        $user = UserModel::find($uriVariables['id']);

        return new UserDTO(
            id: $user->id,
            first_name: $user->first_name,
            last_name: $user->last_name,
            phone_number: $user->phone_number,
            email: $user->email,
            customer_number: $user->customer_number,
        );
    }
}