<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('pages')->insert([[
            'title' => 'Home Page',
            'slug' => 'Home',
            'content' => 'this is home'
        ],[
            'title' => 'Services Page',
            'slug' => 'Services',
            'content' => 'this is services'
        ],[
            'title' => 'About Us Page',
            'slug' => 'About-Us',
            'content' => 'this is about us'
        ],[
            'title' => 'Contact Us Page',
            'slug' => 'Contact-Us',
            'content' => 'this is contact us'
        ]]);
    }
}
