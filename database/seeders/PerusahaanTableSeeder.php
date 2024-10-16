<?php

namespace Database\Seeders;

use App\Models\Perusahaan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PerusahaanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('perusahaans')->insert([
            [
                'namaPerusahaan'=>'PT. ABC',
                'alamatPerusahaan'=>'Jakarta', 
                'NoTlpPerusahaan'=>'021-123123',
            ],
            [
                'namaPerusahaan'=>'PT. XYZ',
                'alamatPerusahaan'=>'Bandung', 
                'NoTlpPerusahaan'=>'031-321321',
            ],
        ]);
    }
}
