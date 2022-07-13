<?php

namespace Database\Seeders;

use App\Models\Tag;
use App\Models\Article;
use App\Models\Comment;
use Illuminate\Database\Seeder;
use App\Enums\Comment as CommentEnum;
use User;

class ArticleSeeder extends Seeder
{
    public function run()
    {

        Article::factory()
            ->count(50)
            ->create()
            ->each(function($article) {

                //Append Random Comments:
                Comment::factory()->count(rand(0, 3))->create([
                    CommentEnum::COMMENTABLE_TYPE => Article::class,
                    CommentEnum::COMMENTABLE_ID => $article->id,
                    CommentEnum::USER_ID        => User::inRandomOrder()->first()->id,
                ]);

                //Append Random Tags:
                $article->tags()->sync(
                    Tag::inRandomOrder()->limit(rand(0, 3))->pluck('id')
                );

            });

    }
}
