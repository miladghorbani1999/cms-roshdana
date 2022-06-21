<?php

namespace Database\Seeders;



use Illuminate\Database\Seeder;
use App\Models\Article as ArticleModel;
use App\Models\ArticleTag as ArticleTagModel;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ArticleModel::factory()
            ->count(50)->create()
            ->each(function ($article) {
                $article->ArticleTages()
                        ->save(ArticleTagModel::factory()
                        ->make()
                    );
            });
    }
}
