<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Enums\Tag as TagEnum;
use App\Models\Article;
use App\Models\Author;
use App\Models\Tag as TagModel;
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
        $names = [
            'اخبارفوری',
            'ایران',
            'جنجالی',
            'طنز',
            'برنامه نویسی',
        ];

        foreach ($names as $name) {
            TagModel::create(['name' => $name]);
        }
    }
}
