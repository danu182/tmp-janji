<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DokterTabelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('dokters')->insert([
            [
                'spesialisId'=>'1',
                'userId'=>'2',
                'namaDokter'=>'dr.budi',
            ],
            [
                'spesialisId'=>'1',
                'userId'=>'3',
                'namaDokter'=>'dr.wati',
            ],
            [
                'spesialisId'=>'2',
                'userId'=>'4',
                'namaDokter'=>'dr.joko',
            ],
            [
                'spesialisId'=>'3',
                'userId'=>'5',
                'namaDokter'=>'dr.wawan',
            ],
            [
                'spesialisId'=>'1',
                'userId'=>'6',
                'namaDokter'=>'dr.ahmad',
            ],
        ]);
    }
}
