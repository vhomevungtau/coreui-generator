<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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

        DB::table('permissions')->insert([
            ['id'    => 210001,'name' => 'user-view','desc'  => 'Xem thông tin người dùng'],
            ['id'    => 210002,'name' => 'user-all','desc'  => 'Danh sách người dùng'],
            ['id'    => 210003,'name' => 'user-create','desc'  => 'Thêm mới người dùng'],
            ['id'    => 210004,'name' => 'user-update','desc'  => 'Cập nhật người dùng'],
            ['id'    => 210005,'name' => 'user-delete','desc'  => 'Xóa người dùng'],
            ['id'    => 210006,'name' => 'user-import','desc'  => 'Nhập liệu người dùng'],
            ['id'    => 210007,'name' => 'user-export','desc'  => 'Xuất liệu người dùng'],
            ['id'    => 210008,'name' => 'role-view','desc'  => 'Xem thông tin vai trò'],
            ['id'    => 210009,'name' => 'role-all','desc'  => 'Danh sách vai trò'],
            ['id'    => 210010,'name' => 'role-create','desc'  => 'Thêm mới vai trò'],
            ['id'    => 210011,'name' => 'role-update','desc'  => 'Cập nhật vai trò'],
            ['id'    => 210012,'name' => 'role-delete','desc'  => 'Xóa vai trò'],
            ['id'    => 210013,'name' => 'role-import','desc'  => 'Nhập liệu vai trò'],
            ['id'    => 210014,'name' => 'role-export','desc'  => 'Xuất liệu vai trò'],
            ['id'    => 210015,'name' => 'permission-view','desc'  => 'Xem thông tin quyền hạn'],
            ['id'    => 210016,'name' => 'permission-all','desc'  => 'Danh sách quyền hạn'],
            ['id'    => 210017,'name' => 'permission-create','desc'  => 'Thêm mới quyền hạn'],
            ['id'    => 210018,'name' => 'permission-update','desc'  => 'Cập nhật quyền hạn'],
            ['id'    => 210019,'name' => 'permission-delete','desc'  => 'Xóa quyền hạn'],
            ['id'    => 210020,'name' => 'permission-import','desc'  => 'Nhập liệu quyền hạn'],
            ['id'    => 210021,'name' => 'permission-export','desc'  => 'Xuất liệu quyền hạn'],

        ]);
    }
}
