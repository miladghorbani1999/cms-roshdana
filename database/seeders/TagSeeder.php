<?php

namespace Database\Seeders;

use App\Enums\BaseEnum;
use Illuminate\Database\Seeder;
use App\Enums\Tag as TagEnum;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\Sequence;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $tags = [
            [BaseEnum::ID => 1,     TagEnum::NAME => 'اخبارفوری'],
            [BaseEnum::ID => 2,     TagEnum::NAME => 'ایران'],
            [BaseEnum::ID => 3,     TagEnum::NAME => 'جنجالی'],
            [BaseEnum::ID => 4,     TagEnum::NAME => 'طنز'],
            [BaseEnum::ID => 5,     TagEnum::NAME => 'برنامه نویسی'],
        ];

        Tag::insert($tags);

    }
}
