<?php

use Illuminate\Database\Seeder;
use App\cat;
class catsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        cat::create([
            'name' => 'Men',
            'slug' => 'men'
        ]);
        cat::create([
            'name' => 'Women',
            'slug' => 'women'
        ]);
        cat::create([
            'name' => 'Kids',
            'slug' => 'kids'
        ]);
        cat::create([
            'name' => 'Footwears',
            'slug' => 'footwears'
        ]);
        cat::create([
            'name' => 'Perfumes',
            'slug' => 'perfumes'
        ]);
        cat::create([
            'name' => 'Watches',
            'slug' => 'watches'
        ]);
        cat::create([
            'name' => 'Sunglasses',
            'slug' => 'sunglasses'
        ]);
        cat::create([
            'name' => 'Bags',
            'slug' => 'bags'
        ]);
    }
}
