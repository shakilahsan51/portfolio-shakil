<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SkillSectionSetting>
 */
class SkillSectionSettingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => 'My Skills',
            'sub_title' => 'These are the technologies I have worked with recently.', 
            'image' => $this->faker->imageUrl(),
        ];
    }
}
