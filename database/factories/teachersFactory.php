<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\teachers>
 */
class teachersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name"=>$this->faker->name(),
            "lastName" =>$this->faker->lastName(),
            "phone_number" =>$this->faker->numberBetween(1000000000,9999999999),
            "user_id"=>$this->faker->numberBetween(1,10),
        ];
    }
}
