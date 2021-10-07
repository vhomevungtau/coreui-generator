<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prices')->insert([
            [
                'id'    => 2101,
                'product_id' => 2101,
                'number'  => 1,
                'price'     => 350000
            ]
        ]);
    }
}
