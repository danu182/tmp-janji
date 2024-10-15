<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    use HasFactory;

    public function getSpesialis()
    {
        return $this->belongsTo(Spesialisasi::class, 'foreign_key', 'other_key');
    }
}
