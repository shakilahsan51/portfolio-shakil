<?php

namespace Database\Seeders;

use App\Models\Experience;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Experience::create([
            'image'       => 'frontend/assets/images/experience.jpg',
            'title'       => '1 Year Experience in Web Design & Development',
            'description' => "I have 1 year of experience in web development, working on both front-end and back-end tasks.\n"
                . "Proficient in HTML, CSS, JavaScript, PHP, Laravel, and MySQL.\n"
                . "Experienced in building CRUD applications, handling images, user authentication, and dynamic content.\n"
                . "Worked on real projects from development to deployment, ensuring clean, efficient, and scalable solutions.",
            'phone'       => '01752854685',
            'email'       => 'shakilahsan51@gmail.com',
        ]);
    }
}
