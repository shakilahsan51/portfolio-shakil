<?php

namespace Database\Seeders;

use App\Models\GeneralSetting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GeneralSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GeneralSetting::create([
            'logo' => url('assets/img/logos/app-logo.png'),
            'footer_logo' => url('assets/img/logos/app-logo.png'),
            'favicon' => url('assets/img/logos/app-logo.png'),
        ]);
    }
}
