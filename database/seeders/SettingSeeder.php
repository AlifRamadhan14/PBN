<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('settings')->insert([
            'logo' => 'logo.png',
            'web_name' => 'Prima Baru Nusantara',
            'web_desc' => 'deskripsi',
            'facebook' => 'facebook.com',
            'instagram' => 'instagram.com',
            'twitter' => 'twiiter.com',
            'linkedln' => 'linkedln.com',
            'phone' => '081131133000',
            'whatsapp' => '081131133000'      
        ]);
    }
}
