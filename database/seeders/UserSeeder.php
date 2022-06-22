<?php

namespace Database\Seeders;


use App\Enums\User as UserEnum;
use App\Models\Author;
use Illuminate\Database\Seeder;
use App\Models\User as UserModel;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Support\Arr;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names = ['علی','حسن','حسین','عرفان','محسن','سعید','میلاد','جواد'];
        $last_names = ['موسوی','محمدی','صادقی','احمدی','محسنی','اکبری','قربانی','مدنیان'];
        UserModel::factory()
                ->count(30)
                ->hasAdmin()
                ->state(new Sequence(
                    fn ($sequence) => [
                        UserEnum::FirstName => Arr::random($names),
                        UserEnum::LAST_NAME => Arr::random($last_names)
                    ],
                ))->create();

        UserModel::factory()
                ->count(50)
                ->has(Author::factory()->hasVideos(4))
                ->state(new Sequence(
                    fn ($sequence) => [
                        UserEnum::FirstName => Arr::random($names),
                        UserEnum::LAST_NAME => Arr::random($last_names)
                    ],
                ))->create();

    }
}
