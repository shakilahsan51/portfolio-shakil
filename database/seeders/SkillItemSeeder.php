<?php

namespace Database\Seeders;

use App\Models\SkillItem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkillItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $languages = ['PHP', 'Laravel', 'JavaScript', 'CSS', 'Tailwind', 'MySQL'];

        foreach ($languages as $language) {
            SkillItem::create([
                'name'    => $language,
                'percent' => rand(50, 100),
            ]);
        }
    }
}
