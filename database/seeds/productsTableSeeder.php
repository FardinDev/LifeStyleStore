<?php

use Illuminate\Database\Seeder;
use App\product;

class productsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i <= 10; $i++) {
            Product::create([
                'name' => 'Men '.$i,
                'img' => 'products\September2018\men ('.$i.').jpg',
                'details' => "ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!",
                'price' => rand(1499, 5499),
                'description' =>'Lorem '. $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
                'featured' => rand(0,1),
                'quantity' => rand(0, 50),
                ])->cats()->attach(1);
        }
        for ($i=1; $i <= 10; $i++) {
            Product::create([
                'name' => 'Women '.$i,
                'img' => 'products\September2018\women ('.$i.').jpg',
                'details' => "ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!",
                'price' => rand(1499, 5499),
                'description' =>'Lorem '. $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
                'featured' => rand(0,1),
                'quantity' => rand(0, 50),
                ])->cats()->attach(2);
        }
        for ($i=1; $i <= 10; $i++) {
            Product::create([
                'name' => 'Kids '.$i,
                'img' => 'products\September2018\kids ('.$i.').jpg',
                'details' => "ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!",
                'price' => rand(1499, 5499),
                'description' =>'Lorem '. $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
                'featured' => rand(0,1),
                'quantity' => rand(0, 50),
                ])->cats()->attach(3);
        }
        for ($i=1; $i <= 10; $i++) {
            Product::create([
                'name' => 'Footwears '.$i,
                'img' => 'products\September2018\footwears ('.$i.').jpg',
                'details' => "ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!",
                'price' => rand(1499, 5499),
                'description' =>'Lorem '. $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
                'featured' => rand(0,1),
                'quantity' => rand(0, 50),
                ])->cats()->attach(4);
        }
        for ($i=1; $i <= 10; $i++) {
            Product::create([
                'name' => 'Perfumes '.$i,
                'img' => 'products\September2018\perfumes ('.$i.').jpg',
                'details' => "ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!",
                'price' => rand(1499, 5499),
                'description' =>'Lorem '. $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
                'featured' => rand(0,1),
                'quantity' => rand(0, 50),
                ])->cats()->attach(5);
        }
        for ($i=1; $i <= 10; $i++) {
            Product::create([
                'name' => 'Watches '.$i,
                'img' => 'products\September2018\watches ('.$i.').jpg',
                'details' => "ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!",
                'price' => rand(1499, 5499),
                'description' =>'Lorem '. $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
                'featured' => rand(0,1),
                'quantity' => rand(0, 50),
                ])->cats()->attach(6);
        }
        for ($i=1; $i <= 10; $i++) {
            Product::create([
                'name' => 'Sunglasses '.$i,
                'img' => 'products\September2018\sunglasses ('.$i.').jpg',
                'details' => "ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!",
                'price' => rand(300, 2000),
                'description' =>'Lorem '. $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
                'featured' => rand(0,1),
                'quantity' => rand(0, 50),
                ])->cats()->attach(7);
        }
        for ($i=1; $i <= 10; $i++) {
            Product::create([
                'name' => 'Bags '.$i,
                'img' => 'products\September2018\bags ('.$i.').jpg',
                'details' => "ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!",
                'price' => rand(1499, 5499),
                'description' =>'Lorem '. $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
                'featured' => rand(0,1),
                'quantity' => rand(0, 50),
                ])->cats()->attach(8);
        }
    }
}
