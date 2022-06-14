<?php

namespace Database\Seeders;


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
                        fn ($sequence) => [ArticleEnum::TITLE => $title,ArticleEnum::DESCRIPTION=>$descriptions[$key],ArticleEnum::USER_ID=>$key+1],
                    ))
                    ->create();
        }
    }
}
