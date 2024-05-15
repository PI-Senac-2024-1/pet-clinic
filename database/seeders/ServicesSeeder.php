<?php

namespace Database\Seeders;

use App\Models\Services;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            'Venda de artigos',
            'Exames',
            'Consultas',
            'Internações',
            'Entregas'
        ];

        foreach ($services as $value) {
            Services::create([
                'title' => $value
            ]);
        }
    }
}
