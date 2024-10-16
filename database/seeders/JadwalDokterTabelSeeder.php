<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JadwalDokterTabelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('jadwal_dokters')->insert([
            [
                'dokterId'=>'1',
                'hari'=>'senin',
                'start_time'=>'10:00',
                'end_time'=>'12:00',
            ],
            [
                'dokterId'=>'1',
                'hari'=>'senin',
                'start_time'=>'15:00',
                'end_time'=>'17:00',
            ],
            [
                'dokterId'=>'1',
                'hari'=>'rabu',
                'start_time'=>'10:00',
                'end_time'=>'12:00',
            ],
            [
                'dokterId'=>'1',
                'hari'=>'jumat',
                'start_time'=>'10:00',
                'end_time'=>'12:00',
            ],
            [
                'dokterId'=>'2',
                'hari'=>'senin',
                'start_time'=>'13:00',
                'end_time'=>'15:00',
            ],
            [
                'dokterId'=>'2',
                'hari'=>'rabu',
                'start_time'=>'13:00',
                'end_time'=>'15:00',
            ],
            [
                'dokterId'=>'2',
                'hari'=>'jumat',
                'start_time'=>'13:00',
                'end_time'=>'15:00',
            ],
        ]);
    }
}
