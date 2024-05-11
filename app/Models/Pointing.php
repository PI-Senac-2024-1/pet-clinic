<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pointing extends Model
{
    use HasFactory;

    protected $fillable = [
        'comment',
        'pointer',
        'user_id',
        'company_id'
    ];
}
