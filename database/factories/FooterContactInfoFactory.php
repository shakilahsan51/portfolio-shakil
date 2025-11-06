<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\FooterContactInfo>
 */
class FooterContactInfoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'address' => $this->faker->address(),         // random address
            'phone' => $this->faker->phoneNumber(),       // random phone number
            'email' => $this->faker->unique()->safeEmail(),
        ];
    }
}
