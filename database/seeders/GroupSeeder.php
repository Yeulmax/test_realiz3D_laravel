<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Group;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $groups = [
        [
            'name' => 'Client A',
            'parent_group_id' => null,
            'group_type_id' => 1
        ],
        [
            'name' => 'Client B',
            'parent_group_id' => null,
            'group_type_id' => 1
        ],
        [
            'name' => 'Région A1',
            'parent_group_id' => 1,
            'group_type_id' => 2
        ],
        [
            'name' => 'Région A2',
            'parent_group_id' => 1,
            'group_type_id' => 2
        ],
        [
            'name' => 'Région B1',
            'parent_group_id' => 2,
            'group_type_id' => 2
        ],
        [
            'name' => 'Programme A2_001',
            'parent_group_id' => 4,
            'group_type_id' => 3
        ],
        [
            'name' => 'Programme A2_002',
            'parent_group_id' => 4,
            'group_type_id' => 3
        ],
        [
            'name' => 'Programme B1_001',
            'parent_group_id' => 5,
            'group_type_id' => 3
        ]];

        foreach($groups as $group){
            Group::create($group);
        }

    }
}

//GroupType::factory()->count(10)->create();
