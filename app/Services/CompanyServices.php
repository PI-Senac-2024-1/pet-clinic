<?php

namespace App\Services;

use App\Repository\AdressRepository;
use App\Repository\CompanyRepository;

class CompanyServices
{
    /**
     * Cadastra a companhia
     * @param array $data
     * @return void
     */
    public static function create(array $data): void
    {
        $data['adress_id'] = AdressRepository::updateOrCreate($data)->id;
        $data['user_id'] = auth()->user()->id;
        CompanyRepository::createCompany($data);
    }
}
