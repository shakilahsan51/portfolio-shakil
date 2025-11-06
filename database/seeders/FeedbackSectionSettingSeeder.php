<?php

namespace Database\Seeders;

use App\Models\FeedbackSectionSetting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FeedbackSectionSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FeedbackSectionSetting::factory()->count(5)->create();
    }
}
