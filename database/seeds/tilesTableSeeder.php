<?php

use Illuminate\Database\Seeder;
use App\tile;
class tilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        tile::create([
            'name' => "DRESSES",
            'img' => "tiles\September2018\dresses.jpg",
            'query' => 'products?cat=dresses',
            
        ]);

        tile::create([
            'name' => "WATCHES",
            'img' => "tiles\September2018\watches.jpg",
            'query' => 'products?cat=watches',
            
        ]);

        tile::create([
            'name' => "FOOTWEAR",
            'img' => "tiles\September2018\footwear.jpg",
            'query' => 'products?cat=footwears',
            
        ]);

        tile::create([
            'name' => "BAGS",
            'img' => "tiles\September2018\bags.jpg",
            'query' => 'products?cat=bags',
        ]);

        tile::create([
            'name' => "SUNGLASSES",
            'img' => "tiles\September2018\sunglasses.jpg",
            'query' => 'products?cat=sunglasses',
        ]);

        tile::create([
            'name' => "PERFUMES",
            'img' => "tiles\September2018\perfumes.jpg",
            'query' => 'products?cat=perfumes',
        ]);
    }
}
