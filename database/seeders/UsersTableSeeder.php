<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
        [
            'name'=>'admin',
            'email'=>'admin@gmail.com',
            'password'=>Hash::make('123'),
            'nik'=>'1231232131231231',
            'birthDay'=>date('Y-m-d', strtotime('2000-10-9')),
            'nip'=>'1111',
            'remember_token'=>Str::random(10),
            'alamat'=>'jakarta',
            'hp'=>'08120812312332',
            'tipe'=>'4'
        ],
        [
            'name'=>'budi',
            'email'=>'budi@gmail.com',
            'password'=>Hash::make('1'),
            'nik'=>'22222222222',
            'birthDay'=>date('Y-m-d', strtotime('1990-10-9')),
            'nip'=>'2222',
            'remember_token'=>Str::random(10),
            'alamat'=>'jakarta',
            'hp'=>'08222222',
            'tipe'=>'0'
        ],
        [
            'name'=>'wati',
            'email'=>'wati@gmail.com',
            'password'=>Hash::make('1'),
            'nik'=>'33333333333',
            'birthDay'=>date('Y-m-d', strtotime('1990-10-9')),
            'nip'=>'3333',
            'remember_token'=>Str::random(10),
            'alamat'=>'jakarta',
            'hp'=>'08333333',
            'tipe'=>'0'
        ],
        [
            'name'=>'joko',
            'email'=>'joko@gmail.com',
            'password'=>Hash::make('1'),
            'nik'=>'44444444444',
            'birthDay'=>date('Y-m-d', strtotime('1990-10-9')),
            'nip'=>'4444',
            'remember_token'=>Str::random(10),
            'alamat'=>'jakarta',
            'hp'=>'084444444',
            'tipe'=>'0'
        ],
        [
            'name'=>'wawan',
            'email'=>'wawan@gmail.com',
            'password'=>Hash::make('1'),
            'nik'=>'555555555555',
            'birthDay'=>date('Y-m-d', strtotime('1990-10-9')),
            'nip'=>'5555',
            'remember_token'=>Str::random(10),
            'alamat'=>'jakarta',
            'hp'=>'085555555555',
            'tipe'=>'0'
        ],
        [
            'name'=>'ahmad',
            'email'=>'ahmad@gmail.com',
            'password'=>Hash::make('1'),
            'nik'=>'666666666666',
            'birthDay'=>date('Y-m-d', strtotime('1990-10-9')),
            'nip'=>'6666',
            'remember_token'=>Str::random(10),
            'alamat'=>'jakarta',
            'hp'=>'085555555555',
            'tipe'=>'0'
        ],
        
    ]);
    }
}
