<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\ArticleTag;

use Illuminate\Database\Seeder;
use App\Models\User as UserModel;
use App\Models\Video;
use App\Enums\Article as ArticleEnum;
use App\Models\Comment;
use App\Enums\Comment as CommentEnum;
use App\Models\Tag;
use App\Enums\Tag as TagEnum;
use App\Enums\Video as VideoEnum;
use App\Enums\Author as AuthorEnum;
use App\Enums\Admin as AdminEnum;
use App\Models\Admin;
use App\Models\Author;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $user = UserModel::factory()
                ->count(30)
                ->create()
                ->each(function($user){
                    if (rand(0,3)<2) {
                        Author::factory()->create([
                            AuthorEnum::USER_ID =>$user->id
                        ])->each(function($author){

                            $article = Article::factory()->count(rand(1,5))->create([
                                ArticleEnum::AUTHOR_ID=>$author->id
                            ])->each(function($article){
                                ArticleTag::factory(rand(0,1))->create([
                                    TagEnum::TAG_ID => Tag::inRandomOrder()->first()->id,
                                    TagEnum::ARTICLE_ID => $article->id,
                                ]);
                                Comment::factory()->count(rand(0,8))->create([
                                    CommentEnum::COMMENTABLE_TYPE => Article::class,
                                    CommentEnum::COMMENTABLE_ID   => $article->id
                                ]);
                            });
                            $video = Video::factory()
                                ->count(rand(1,4))
                                ->create([
                                    VideoEnum::AUTHOR_ID => $author->id,
                                ])
                                ->each(function($video){
                                    Comment::factory()->count(rand(0,8))->create([
                                        CommentEnum::COMMENTABLE_TYPE => Video::class,
                                        CommentEnum::COMMENTABLE_ID   => $video->id
                                    ]);
                                });
                        });
                    }else{
                        Admin::factory()->create([
                            AdminEnum::USER_ID => $user->id
                        ]);
                    }
                });

    }
}
