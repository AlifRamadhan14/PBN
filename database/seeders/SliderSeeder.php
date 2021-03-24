<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sliders')->insert([
            'title' => 'Ingin segera konsultasi dengan kami ?',
            'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptas alias in accusamus ipsam! Deleniti quam soluta praesentium, quas excepturi vitae facere eligendi rem explicabo optio ad quis animi',
            'image' => 'slider.png', 
        ]);
    }
}
