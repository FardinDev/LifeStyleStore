<?php

use Illuminate\Database\Seeder;
use App\banner;
class bannersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        banner::create([
            'name' => 'Banner 1',
            'img' => 'images/banner-1.jpg',
            'tag' => "New Arrival",
            ]); 
            
        banner::create([
            'name' => 'Banner 2',
            'img' => 'images/banner-2.jpg',
            'tag' => "Old is Gold",
            ]);

        banner::create([
            'name' => 'Banner 3',
            'img' => 'images/banner-3.jpg',
            'tag' => "The third banner",
            ]);
    }
}
