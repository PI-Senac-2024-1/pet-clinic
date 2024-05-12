<?php

namespace App\Repository;

use App\Models\Adress;

class AdressRepository
{
    /**
     * Atualiza os dados ou cria um endereço com base no array recebido
     * @param array $data
     * @return Adress
     */
    public static function updateOrCreate(array $data): Adress
    {
        return Adress::updateOrCreate(
            [
                'zipcode' => $data['zipcode'],
                'street' => $data['street'],
                'district' => $data['district'],
                'city' => $data['city'],
                'state' => $data['state'],
            ],
            $data
        );
    }
}
