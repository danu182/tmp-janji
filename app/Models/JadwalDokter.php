<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalDokter extends Model
{
    use HasFactory;

    protected $fillable=[
        'dokterId',
        'hari',
        'start_time',
        'end_time',

    ];
}
