<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    use HasFactory;


    protected $fillable=[
            'spesialisId',
            'userId',
            'namaDokter',
        ];


    public function getSpesialisasi()
    {
        return $this->belongsTo(Spesialisasi::class, 'spesialisId', 'id');
    }

    

    
}
