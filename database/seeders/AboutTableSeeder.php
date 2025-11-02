<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        About::create([
            'title'       => 'About Me',
            'description' => 'I am a passionate full-stack developer with 5+ years of experience building modern web applications using Laravel, Vue.js, and Tailwind CSS. I love clean code, performance, and user-friendly design.',
            'image'       => url('assets/img/avatar/avater-1.png'),
            'resume'      => null,
        ]);
    }
}
