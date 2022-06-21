<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Author as AuthorModel;
class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AuthorModel::factory()
                ->count(30)
                ->create();
    }
}
