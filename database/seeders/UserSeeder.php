<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name' => 'admin',
            'nik' => '3173012906880015',
            'email'=> 'arhie.29061988@gmail.com',
            'password' => bcrypt('12345678')
        ]);
        $admin->assignRole('admin');

        $hr = User::create([
            'name' => 'Florencia',
            'nik' => '3273012906880002',
            'email'=> 'floren@tpfx.co.id',
            'password' => bcrypt('12345678')
        ]);
        $admin->assignRole('hr');
    }
}
