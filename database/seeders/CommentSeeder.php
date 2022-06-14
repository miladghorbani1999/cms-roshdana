<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Comment as CommentModel;
use Illuminate\Database\Eloquent\Factories\Sequence;
use App\Enums\Comment as CommentEnum;


class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comments = [
            'نظر اول',
            'نظر دوم',
            'نظر سوم',
        ];
        $commentable_id = [
            'App\video',
            'App\Article',
        ];
        foreach ($comments as $key => $comment) {
            CommentModel::factory()
                    ->state(new Sequence(
                        fn ($sequence) => [
                            CommentEnum::BODY => $comment,
                            CommentEnum::COMMENTABLE_ID=>$key+1,
                            CommentEnum::COMMENTABLE_TYPE=>$commentable_id[array_rand($commentable_id)],
                            CommentEnum::USER_ID=>$key+1
                        ],
                    ))
                    ->create();
        }
    }
}
