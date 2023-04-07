<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Breed>
 */
class BreedFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'size' => $this->faker->randomElement(['Tiny', 'Small', 'Medium', 'Large']),
            'friendliness' => $this->faker->numberBetween(1, 5),
            'trainability' => $this->faker->numberBetween(1, 5),
            'shedding_amount' => $this->faker->numberBetween(1, 5),
            'exercise_needs' => $this->faker->numberBetween(1, 5),
        ];
    }
}
