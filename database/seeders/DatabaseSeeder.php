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

        $this->call(TruncateAllTables::class);

        $this->call([
            CategorySeeder::class,
            TagSeeder::class,
            UserSeeder::class,
            // ArticleSeeder::class,
            // CommentSeeder::class,
        ]);
    }
}
