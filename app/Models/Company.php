<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'alias',
        'document',
        'complement',
        'phone',
        'email',
        'user_id',
        'adress_id'
    ];
}
