<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\ArticleTag;

use App\Models\User;
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
        User::factory()->count(50)->create();
    }
}
