<?php

namespace App\Repository;

use App\Models\Company;

class CompanyRepository
{
    /**
     * Recebe um array de dados e salva no banco de dados
     * @param array $data
     * @return Company $company
     */
    public static function createCompany(array $data): Company
    {
        return Company::create($data);

    }
}
