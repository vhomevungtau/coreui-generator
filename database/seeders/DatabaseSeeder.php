<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            // StatusSeeder::class,
            RoleSeeder::class,
            UserAdminSeeder::class,
            ColorSeeder::class,
            ProductSeeder::class,
            PriceSeeder::class,
        ]);
    }
}
