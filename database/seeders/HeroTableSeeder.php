<?php

namespace Database\Seeders;

use App\Models\Hero;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HeroTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Hero::create([
            'title'     => 'Hi, I am Shakil Ahsan',
            'sub_title' => 'Laravel Developer — transforming ideas into secure, optimized and high-performance web solutions.',
            'btn_text'  => 'See My Work',
            'btn_url'   => '/portfolio',
            'image'     => url('assets/img/hero/hero-1.jpg'),
        ]);
    }
}
