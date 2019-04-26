<?php

use Illuminate\Database\Seeder;
use App\Book;
use Faker\Factory;

class BookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $faker = Factory::create();

        Book::truncate();

        foreach(range(1, 10) as $i) {
            Book::create([
                'title' => $faker->sentence,
                'author' => $faker->name,
                'description' => $faker->paragraph,

            ]);
        }
    }
}
