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
            'title'     => 'Welcome to Our Platform',
            'sub_title' => 'Empowering businesses with innovative solutions.',
            'btn_text'  => 'Get Started',
            'btn_url'   => '/register',
            'image'     => url('assets/img/example-image.jpg'),
        ]);
    }
}
