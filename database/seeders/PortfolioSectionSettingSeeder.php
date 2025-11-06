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
        PortfolioSectionSetting::factory(5)->create();
    }
}
