<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin as AdminModel;
class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        AdminModel::factory()
            ->count(3)
            ->create();
    }
}
