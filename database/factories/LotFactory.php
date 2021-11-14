<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class LotFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->regexify('[A-Z]{1}[0-9]{3}'),
            'group_id' => $this->faker->numberBetween(1,8)
        ];
    }
}
