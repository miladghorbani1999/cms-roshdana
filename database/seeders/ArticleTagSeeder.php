<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\ArticleTag as ArticleTagModel;

class ArticleTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ArticleTagModel::factory(1)
                ->create();
    }
}
