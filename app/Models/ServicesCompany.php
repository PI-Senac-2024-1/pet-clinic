<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicesCompany extends Model
{
    use HasFactory;

    protected $fillable = [
        'services_id',
        'company_id'
    ];
}
