<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\Permission;
use App\Models\Permissions;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('roles')->insert([
            [
                'id'    => 101,
                'name' => 'Admin',
                'desc'  => 'Quản trị'
            ],
            [
                'id'    => 102,
                'name' => 'Staff',
                'desc'  => 'Nhân viên'
            ],
            [
                'id'    => 103,
                'name' => 'Customer',
                'desc'  => 'Khách hàng'
            ]

        ]);


        // $role = Role::findById('210001');

        // $permissions = Permission::all();

        // foreach ($permissions as $permission) {
        //     $role->permissions()->attach($permission);
        // }
    }
}
