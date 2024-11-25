<?php

namespace Database\Seeders;

use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@domain.com',
            'password' => Hash::make('password123'),
        ]);
        $admin->assignRole('Administrator');

        $guru = User::create([
            'name' => 'Edi',
            'email' => 'Edikusyanto@domain.com',
            'password' => Hash::make('password123'),
        ]);
        $guru->assignRole('Guru');

        $siswa = User::create([
            'name' => 'Dicky',
            'email' => 'Dicky@domain.com',
            'password' => Hash::make('password123'),
        ]);
        $siswa->assignRole('Siswa');
    }
}

