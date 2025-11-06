<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SkillItem>
 */
class SkillItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->randomElement(['PHP', 'Laravel', 'JavaScript', 'HTML', 'CSS', 'Tailwind', 'MySQL']),
            'percent' => $this->faker->numberBetween(50, 100),
        ];
    }
}
