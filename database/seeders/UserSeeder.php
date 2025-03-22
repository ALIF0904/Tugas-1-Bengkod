<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      user::create([
        'nama' => 'Dr. John Son',
        'alamat' => 'Jl. Sadewa I No.56',
        'no_hp' => '085626162891',
        'email' => 'Johnson123@gmail.com',
        'role' => 'dokter',
        'password' => Hash::make('password')
        
      ]);

      user::create([
        'nama' => 'Suryati',
        'alamat' => 'Jl. Nakula Raya No 34',
        'no_hp' => '089814257187',
        'email' => 'Suryati123@gmail.com',
        'role' => 'pasien',
        'password' => Hash::make('password')
        
      ]);
    }
}
