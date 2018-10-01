<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(catsTableSeeder::class);
        $this->call(productsTableSeeder::class);
        $this->call(bannersTableSeeder::class);
        $this->call(tilesTableSeeder::class);
    }
}
