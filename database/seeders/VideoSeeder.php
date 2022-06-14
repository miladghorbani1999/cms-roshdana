<?php

namespace Database\Seeders;

use App\Enums\Video as VideoEnum;
use App\Models\Video as VideoModel;
use Illuminate\Database\Eloquent\Factories\Sequence;
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
        $titles = [
            'عنوان ویدیو اول',
            'عنوان ویدیو دوم',
            'عنوان ویدیو سوم',
        ];
        $descriptions = [
            'توضیحات ویدیو اول',
            'توضیحات ویدیو دوم',
            'توضیحات ویدیو سوم',
        ];
        foreach ($titles as $key => $title) {
            VideoModel::factory()
                    ->state(new Sequence(
                        fn ($sequence) => [VideoEnum::TITLE => $title,VideoEnum::DESCRIPTION=>$descriptions[$key]],
                    ))
                    ->create();
        }
    }
}
