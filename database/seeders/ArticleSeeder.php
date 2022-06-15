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
        $titles = [
            'عنوان مقاله اول',
            'عنوان مقاله دوم',
            'عنوان مقاله سوم',
        ];
        $descriptions = [
            'توضیحات مقاله اول',
            'توضیحات مقاله دوم',
            'توضیحات مقاله سوم',
        ];
        foreach ($titles as $key => $title) {
            ArticleModel::factory()
                    ->state(new Sequence(
                        fn ($sequence) => [
                            ArticleEnum::USER_ID => Author::inRandomOrder()->first()->user->id,
                            ArticleEnum::TITLE => $title,
                            ArticleEnum::DESCRIPTION => $descriptions[$key],
                        ],
                    ))
                    ->create();
        }
    }
}
