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

        $this->call([
            UserSeeder::class,
            AdminSeeder::class,
            AuthorSeeder::class,
            ImageSeeder::class,
            ArticleSeeder::class,
            VideoSeeder::class,
        ]);
        // User::factory(1)->create();
        // Admin::factory(10)->create();
        // Author::factory(10)->create();
    }
}
