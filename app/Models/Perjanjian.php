<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perjanjian extends Model
{
    use HasFactory;

    protected $fillable=
        [
            'userId',
            'doctorId',
            'jadwalDokterId',
        ];
}
