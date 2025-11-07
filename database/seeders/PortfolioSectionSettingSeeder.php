<?php

namespace Database\Seeders;

use App\Models\PortfolioSectionSetting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PortfolioSectionSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PortfolioSectionSetting::create([
            'title'     => 'My Latest Portfolio',
            'sub_title' => 'A showcase of projects that demonstrate my skills and creativity in web development',
        ]);
    }
}
