<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = Role::firstOrCreate(['name'=>'admin','guard_name'=>'api']);
        $guest = Role::firstOrCreate(['name'=>'guest','guard_name'=>'api']);

        $permissions = [
            'admin','guest'
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name'=>$permission,'guard_name'=>'api']);
        }

        $admin->syncPermissions($permissions);

        $guest->syncPermissions('guest');
    }

   
}
