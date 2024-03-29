<?php

namespace Database\Seeders;

use App\Enums\User as UserEnum;
use App\Models\User;
use App\Models\Admin;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //یک ادمین مشخص با اطللاعات خاص برای آزمایش
//        Admin::factory()->count(1)
//            ->for(User::factory()->state([
//                UserEnum::FirstName => 'میلاد',
//                UserEnum::LAST_NAME => 'قربانی',
//                UserEnum::IMAGE => 'ghorbani.jpg',
//                UserEnum::EMAIL => 'ghorbani@gmail.com',
//                UserEnum::MOBILE => '09120000000',
//                UserEnum::PASSWORD => bcrypt('123456'),
//            ]))->create();

        //سه ادمین بصورت رندوم
        Admin::factory()->count(3)->create();

    }
}
