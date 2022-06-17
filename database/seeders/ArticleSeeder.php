<?php

namespace Database\Seeders;


use App\Models\Author;
use App\Models\User;
use Illuminate\Database\Seeder;
use App\Models\Article as ArticleModel;
use App\Enums\Article as ArticleEnum;
use Illuminate\Database\Eloquent\Factories\Sequence;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ArticleModel::factory()->count(50)->create();
    }
}
