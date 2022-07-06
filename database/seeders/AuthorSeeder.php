<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Author;
use App\Enums\User as UserEnum;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AuthorSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //یک نویسنده مشخص با اطللاعات خاص برای آزمایش
        Author::factory()
            ->for(User::factory()->state([
                UserEnum::FirstName => 'احسان',
                UserEnum::LAST_NAME => 'کریمی',
                UserEnum::EMAIL => 'karimi@gmail.com',
                UserEnum::MOBILE => '09121234567',
                UserEnum::PASSWORD => bcrypt('123456'),
            ]))->create();

        //شش نویسنده بصورت رندوم
        Author::factory()->count(6)->create();

    }
}
