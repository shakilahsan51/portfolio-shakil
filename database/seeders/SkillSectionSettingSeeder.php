<?php

namespace Database\Seeders;

use App\Models\SkillSectionSetting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkillSectionSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SkillSectionSetting::create([
            'title' => 'My Skills',
            'sub_title' => 'These Are The Technologies I Have Worked With Recently.',
            'image' => 'frontend/assets/images/skill-image.jpg',
        ]);
    }
}
