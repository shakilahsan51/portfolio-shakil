<?php

namespace Database\Seeders;

use App\Models\FooterUsefullLink;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FooterUsefullLinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FooterUsefullLink::factory(6)->create();
    }
}
