<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spesialisasi extends Model
{
    use HasFactory;

    protected $fillable = [
        'namaSpesialis',
        'keterangan',
    ];    


    public function getDokter()
    {
        return $this->hasMany(Dokter::class, 'spesialisId', 'id');
    }
}
