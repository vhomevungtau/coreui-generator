<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'user-view',
            'user-all',
            'user-create',
            'user-update',
            'user-delete',
            'user-import',
            'user-export',
            'role-view',
            'role-all',
            'role-create',
            'role-update',
            'role-delete',
            'role-import',
            'role-export',
            'permission-view',
            'permission-all',
            'permission-create',
            'permission-update',
            'permission-delete',
            'permission-import',
            'permission-export',
         ];

         $id =210000;
         foreach ($permissions as $permission) {
              Permission::create(['id'=>$id++,'name' => $permission]);
         }
    }
}
