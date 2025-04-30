<?php

namespace Database\Factories;

use App\Models\BuildingType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Building>
 */
class BuildingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'building_type_id' => BuildingType::inRandomOrder()->first()->id,
            'address' => $this->faker->streetAddress . ', ' .
                $this->faker->city . ', ' .
                $this->faker->state . ' ' .
                $this->faker->postcode,
        ];
    }
}
