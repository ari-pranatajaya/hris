<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * Role : Admin, HR, Staff HR, Employee
     * Permission : Create, Read, Update ,Delete
     */
    public function run(): void
    {
        Permission::create(['name' => 'create-employee']);
        Permission::create(['name' => 'read-employee']);
        Permission::create(['name' => 'update-employee']);
        Permission::create(['name' => 'delete-employee']);

        Permission::create(['name' => 'create-bank']);
        Permission::create(['name' => 'read-bank']);
        Permission::create(['name' => 'update-bank']);
        Permission::create(['name' => 'delete-bank']);

        Role::create(['name'=>'admin']);
        Role::create(['name'=>'hr']);
        Role::create(['name'=>'staff-hr']);
        Role::create(['name'=>'employee']);

        $roleAdmin = Role::findByName('admin');
        $roleAdmin->givePermissionTo('create-employee');
        $roleAdmin->givePermissionTo('read-employee');
        $roleAdmin->givePermissionTo('update-employee');
        $roleAdmin->givePermissionTo('delete-employee');

        $roleHr = Role::findByName('hr');
        $roleHr->givePermissionTo('create-bank');
        $roleHr->givePermissionTo('read-bank');
        $roleHr->givePermissionTo('update-bank');
        $roleHr->givePermissionTo('delete-bank');


    }
}
