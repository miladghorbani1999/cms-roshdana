<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Admin;
use App\Models\Author;

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
            AuthorSeeder::class
        ]);
        // User::factory(1)->create();
        // Admin::factory(10)->create();
        // Author::factory(10)->create();
    }
}
