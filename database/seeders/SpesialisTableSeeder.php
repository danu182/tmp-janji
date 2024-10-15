<?php

namespace Database\Seeders;

use App\Models\Spesialisasi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SpesialisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Spesialisasi::create(
            [
                'namaSpesialis'=>'Anak',
                'keterangan'=>'spesialis anak',
            ],
            [
                'namaSpesialis'=>'Gigi',
                'keterangan'=>'spesialis Gigi',
            ],
            [
                'namaSpesialis'=>'penyakit dalam',
                'keterangan'=>'spesialis penyakit dalam',
            ],
            [
                'namaSpesialis'=>'Mata',
                'keterangan'=>'spesialis Mata',
            ],
            [
                'namaSpesialis'=>'kulit kelamin',
                'keterangan'=>'spesialis kulit kelamin',
            ],
        );
    }
}
