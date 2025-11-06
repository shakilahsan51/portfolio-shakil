<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Database\Seeders\PortfolioItemTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(1)->create();
        $this->call(HeroTableSeeder::class);
        $this->call(AboutTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(PortfolioItemTableSeeder::class);
        $this->call(PortfolioSectionSettingSeeder::class);
    }
}
