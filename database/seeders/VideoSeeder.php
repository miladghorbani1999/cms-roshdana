<?php

namespace Database\Seeders;

use App\Enums\Comment as CommentEnum;
use App\Models\Comment;
use App\Models\User;
use App\Models\Video;
use Illuminate\Database\Seeder;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Video::factory()
            ->count(20)
            ->create()
            ->each(function($video) {

                Comment::factory()->count(rand(0, 3))->create([
                    CommentEnum::COMMENTABLE_TYPE => Video::class,
                    CommentEnum::COMMENTABLE_ID => $video->id,
                    CommentEnum::USER_ID        => User::inRandomOrder()->first()->id,
                ]);

            });
    }
}
