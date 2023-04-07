<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Dog>
 */
class DogFactory extends Factory
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
            'age' => $this->faker->numberBetween(1, 20),
            'gender' => ['Male', 'Female'][mt_rand(0, 1)],
            'color' => $this->faker->colorName,
            'favorite_food' => $this->faker->word,
            'favorite_toy' => $this->faker->word,
        ];
    }
}
