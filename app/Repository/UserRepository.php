<?php

namespace App\Repository;

use App\Models\User;

class UserRepository
{
    /**
     * Recebe um array de dados e salva no banco de dados
     * @param array $data
     * @return User $user
     */
    public static function createUser(array $data): User
    {
        return User::create($data);

    }
}
