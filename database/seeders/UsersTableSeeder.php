<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create(
        [
            'name'=>'admin',
            'email'=>'admin@gmail.com',
            'password'=>Hash::make('123'),
            'nik'=>'1231232131231231',
            'birthDay'=>date('Y-m-d', strtotime('2000-10-9')),
            'nip'=>'123123213123',
            'remember_token'=>Str::random(10),
            'alamat'=>'jakarta',
            'hp'=>'08120812312332',
            'tipe'=>'4'
        ],
        [
            'name'=>'budi',
            'email'=>'budi@gmail.com',
            'password'=>Hash::make('1'),
            'nik'=>'11111111111111',
            'birthDay'=>date('Y-m-d', strtotime('1990-10-9')),
            'nip'=>'1111111',
            'remember_token'=>Str::random(10),
            'alamat'=>'jakarta',
            'hp'=>'081111111',
            'tipe'=>'0'
        ],
        
    );
    }
}
