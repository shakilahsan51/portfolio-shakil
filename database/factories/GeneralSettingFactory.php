<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\GeneralSetting>
 */
class GeneralSettingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'logo' => $this->faker->imageUrl(200, 100, 'logo'), // random logo image
            'footer_logo' => $this->faker->imageUrl(200, 100, 'logo'), // random footer logo
            'favicon' => $this->faker->imageUrl(32, 32, 'favicon'), // random favicon
        ];
    }
}
