<?php

namespace Database\Seeders;

use App\Models\Lot;
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
        Lot::factory(30)->create();
    }
}
