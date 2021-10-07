<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('statuses')->insert([
            [
                'id'    => 101,
                'name'  => 'Chờ',
                'desc'  => 'Đơn hàng, lịch hẹn chờ xác nhận',
                'color' => 'primary',
            ],
            [
                'id'    => 102,
                'name'  => 'Hủy',
                'desc'  => 'Đơn hàng, lịch hẹn đã hủy',
                'color' => 'danger',
            ],
            [
                'id'    => 103,
                'name'  => 'Thanh toán',
                'desc'  => 'Đơn hàng đã thanh toán',
                'color' => 'warning',
            ],
            [
                'id'    => 104,
                'name'  => 'Chấp nhận',
                'desc'  => 'Lịch hẹn đã chấp nhận',
                'color' => 'secondary',
            ],
            [
                'id'    => 105,
                'name'  => 'Hoàn thành',
                'desc'  => 'Đơn hàng, lịch hẹn đã hoàn thành',
                'color' => 'success',
            ]
        ]);
    }
}
