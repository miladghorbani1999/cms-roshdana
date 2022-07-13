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

        $this->call(CategorySeeder::class);
        $this->call(TagSeeder::class);
        $this->call(CitySeeder::class);

        $this->call(AdminSeeder::class);
        $this->call(AuthorSeeder::class);
        $this->call(UserSeeder::class);

        $this->call(ArticleSeeder::class);
        $this->call(VideoSeeder::class);

    }
}
