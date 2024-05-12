<?php

namespace App\Services;

use App\Models\Adress;
use App\Repository\AdressRepository;

class AdressServices
{
    /**
     * Cria o endereço
     * @param $data
     * @return Adress $adress
     */
    public static function create(array $data): Adress
    {
        return Adress::create($data);
    }

    /**
     * Cria o endereço caso ele não exista. Se existir irá atualizar o endereço
     * @param $data
     * @return Adress $adress
     */
    public static function updateOrCreate(array $data): Adress
    {
        return AdressRepository::updateOrCreate($data);
    }
}
