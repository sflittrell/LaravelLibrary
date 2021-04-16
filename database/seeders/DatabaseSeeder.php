<?php

namespace Database\Seeders;

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
         \App\Models\User::factory(50)->create();
         \App\Models\Book::factory(100)->create();
         \App\Models\Author::factory(20)->create();
         \App\Models\Genre::factory(30)->create();
         \App\Models\Checkout::factory(30)->create();

    }
}
