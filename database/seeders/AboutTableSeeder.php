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
            'description' => ' <strong> Passionate Laravel web developer skilled in PHP, Laravel, Tailwind, Bootstrap, and JavaScript </strong>. <br> <br> I love writing clean code and building modern, user-friendly web applications.
                                I have a strong understanding of backend and frontend development, creating scalable and efficient solutions.
                                I enjoy collaborating with teams to deliver high-quality projects on time.
                                Constantly learning new technologies to stay updated with the latest web development trends.',
            'image'       => url('assets/img/about-me/about-me.JPG'),
            'resume'      => null,
        ]);
    }
}
