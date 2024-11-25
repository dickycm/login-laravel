<?php

namespace Database\Seeders;

use Spatie\Permission\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    public function run()
    {
        Role::create(['name' => 'Administrator']);
        Role::create(['name' => 'Guru']);
        Role::create(['name' => 'Siswa']);
    }
}
