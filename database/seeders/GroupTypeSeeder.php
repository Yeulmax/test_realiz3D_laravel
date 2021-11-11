<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\GroupType;

class GroupTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GroupType::create(['label' => "Client"]);
        GroupType::create(['label' => "Région"]);
        GroupType::create(['label' => "Programme"]);
    }
}
