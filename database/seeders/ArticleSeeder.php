<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;

class ArticleSeeder extends Seeder
{
    public function run()
    {

        Article::factory()
            ->count(5)
            ->hasComments(3)
//            ->hasTags(4)
            ->create()
            ->each(function ($article) {
//                $article->tags()->sync([1, 3, 4]);
            });


    }
}
