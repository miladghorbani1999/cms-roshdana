<?php

namespace Database\Seeders;


use App\Enums\User as UserEnum;
use App\Models\Author;
use Illuminate\Database\Seeder;
use App\Models\User as UserModel;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Support\Arr;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        UserModel::factory()
                ->count(30)
                ->hasAdmin()
                ->create();

        UserModel::factory()
                ->count(50)
                ->has(Author::factory())
                ->create();

    }
}
