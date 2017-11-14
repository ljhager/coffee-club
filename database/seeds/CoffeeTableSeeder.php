<?php

use Illuminate\Database\Seeder;

class CoffeeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $coffee = new \App\Coffee([
            'imagePath' => 'images\coffee1.png',
            'title' => 'Coffee'
            'description' => 'Best Coffee in Asheville',
            'price' => 7
        ]);
        $coffee->save();

        $coffee = new \App\Coffee([
            'imagePath' => 'images\coffee2.png',
            'title' => 'Coffee'
            'description' => 'Best Coffee in Asheville',
            'price' => 7
        ]);
        $coffee->save();

        $coffee = new \App\Coffee([
            'imagePath' => 'images\coffee3.png',
            'title' => 'Coffee'
            'description' => 'Best Coffee in Asheville',
            'price' => 7
        ]);
        $coffee->save();

        $coffee = new \App\Coffee([
            'imagePath' => 'images\coffee4.png',
            'title' => 'Coffee'
            'description' => 'Best Coffee in Asheville',
            'price' => 7
        ]);
        $coffee->save();

        $coffee = new \App\Coffee([
            'imagePath' => 'images\coffee5.png',
            'title' => 'Coffee'
            'description' => 'Best Coffee in Asheville',
            'price' => 7
        ]);
        $coffee->save();

        $coffee = new \App\Coffee([
            'imagePath' => 'images\coffee6.png',
            'title' => 'Coffee'
            'description' => 'Best Coffee in Asheville',
            'price' => 7
        ]);
        $coffee->save();
    }
}
