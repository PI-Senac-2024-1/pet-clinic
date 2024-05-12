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

    /**
     * Retorna o usuário com base no ID recebido
     * @param int $idUser
     * @return User $user
     */
    public static function findUSer(int $idUser): User
    {
        return User::find($idUser);
    }

    /**
     * Atualiza o usuário recebido
     * @param array $data
     * @return void
     */
    public static function updateUser(array $data): Void
    {
        User::where('id', $data['id'])->update([
            'username' => $data['username'],
            'email' => $data['email'],
            'document' => $data['document'],
            'number' => $data['number'],
            'phone' => $data['phone'],
            'adress_id' => $data['adress_id'],
            'complement' => $data['complement'],
        ]);
    }
}
