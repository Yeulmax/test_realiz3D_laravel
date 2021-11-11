<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Lot;

class LotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Lot::create([
            'name' => '101',
            'group_id' => 6
        ]);
    }
}
