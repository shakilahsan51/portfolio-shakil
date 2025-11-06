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
        $this->call(SkillItemSeeder::class);
        $this->call(SkillSectionSettingSeeder::class);
        $this->call(ExperienceSeeder::class);
        $this->call(FeedbackSectionSettingSeeder::class);
        $this->call(BlogSeeder::class);
        $this->call(BlogSectionSettingSeeder::class);
        $this->call(GeneralSettingSeeder::class);
    }
}
