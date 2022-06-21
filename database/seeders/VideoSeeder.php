<?php

namespace Database\Seeders;

use App\Models\Video as VideoModel;
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


        VideoModel::factory()
                ->count(30)
                ->create();

    }
}
