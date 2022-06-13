<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\User as UserModel;
use Illuminate\Database\Eloquent\Factories\Sequence;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name=['علی','حسن','حسین','عرفان','محسن','سعید','میلاد','جواد'];
        $last_name=['موسوی','محمدی','صادقی','احمدی','محسنی','اکبری','قربانی','مدنیان'];
        UserModel::factory()
                ->count(10)
                ->state(new Sequence(
                    fn ($sequence) => ['name' => $name[array_rand($name)],'last_name'=>$last_name[array_rand($last_name)]],
                ))
                ->create();
    }
}
