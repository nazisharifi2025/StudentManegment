<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\students>
 */
class studentFactory extends Factory
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
            "email" =>$this->faker->email(),
            "date_of_birth" =>$this->faker->date(),
            "gender"=> $this->faker->randomElement('male','female'),
            "userId"=>$this->faker->numberBetween(1,10),
            "ClassId"=>$this->faker->numberBetween(1,8),
        ];
    }
}
