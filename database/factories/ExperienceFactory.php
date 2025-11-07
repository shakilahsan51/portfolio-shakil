<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Experience>
 */
class ExperienceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            // 'image' => $this->faker->imageUrl(),
            // 'title' => $this->faker->jobTitle(),
            // 'description' => $this->faker->paragraph(),
            // 'phone' => $this->faker->phoneNumber(),
            // 'email' => $this->faker->unique()->safeEmail(),
        ];
    }
}
