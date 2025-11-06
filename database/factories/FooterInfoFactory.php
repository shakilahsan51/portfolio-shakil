<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\FooterInfo>
 */
class FooterInfoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'info' => 'This is a sample footer info text.', // static or faker text
            'copy_right' => '© 2025 Your Company. All rights reserved.', // static copyright
            'powered_by' => 'Powered by Laravel', // static powered by
        ];
    }
}
