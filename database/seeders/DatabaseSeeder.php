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
        $this->call([GroupTypeSeeder::class]);
        $this->call([GroupSeeder::class]);
        \App\Models\Lot::factory(20)->create();
    }
}
