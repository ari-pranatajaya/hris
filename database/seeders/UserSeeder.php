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
            'name' => 'Head HR',
            'nik' => '3273012906880002',
            'email'=> 'hr@tpfx.co.id',
            'password' => bcrypt('12345678')
        ]);
        $hr->assignRole('hr');

        $staff_hr = User::create([
            'name' => 'Staff HR',
            'nik' => '3273012906880002',
            'email'=> 'staff@tpfx.co.id',
            'password' => bcrypt('12345678')
        ]);
        $staff_hr->assignRole('staff hr');

        $employee = User::create([
            'name' => 'Karyawan',
            'nik' => '3273012906880002',
            'email'=> 'employee@tpfx.co.id',
            'password' => bcrypt('12345678')
        ]);
        $employee->assignRole('employee');
    }
}
