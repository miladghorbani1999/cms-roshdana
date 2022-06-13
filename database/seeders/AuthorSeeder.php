<?php

namespace Database\Seeders;

use App\Enums\Author as AuthorEnum;
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
                ->count(3)
                ->create();
    }
}
