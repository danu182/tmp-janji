<?php

namespace Database\Seeders;

use App\Models\Perusahaan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PerusahaanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Perusahaan::create([
            'namaPerusahaan'=>'PT. ABC',
            'alamatPerusahaan'=>'Jakarta', 
            'NoTlpPerusahaan'=>'021-123123',
        ],
        [
            'namaPerusahaan'=>'PT. XYZ',
            'alamatPerusahaan'=>'Bandung', 
            'NoTlpPerusahaan'=>'031-321321',
        ],);
    }
}
