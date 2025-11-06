<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BlogSectionSetting>
 */
class BlogSectionSettingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => 'Latest Blog & Articles', // Static section title
            'sub_title' => 'Stay updated with my latest tutorials, tips and insights.', // Static subtitle
        ];
    }
}
