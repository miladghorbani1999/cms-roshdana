<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Enums\User as UserEnum;
use App\Models\User as UserModel;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admins = [
            [
                UserEnum::NAME=> 'میلاد',
                UserEnum::LAST_NAME => 'قربانی',
                UserEnum::EMAIL => 'milad@gmail.com',
                UserEnum::EMAIL_VERIFY => now(),
                UserEnum::PASSWORD => '12345678',
                UserEnum::REMEMBER_TOKEN => Str::random(10),
            ],
            [
                UserEnum::NAME=> 'علی',
                UserEnum::LAST_NAME => 'موسوی',
                UserEnum::EMAIL => 'ali@gmail.com',
                UserEnum::EMAIL_VERIFY => now(),
                UserEnum::PASSWORD => '12345678',
                UserEnum::REMEMBER_TOKEN => Str::random(10),
            ]
        ];

        foreach ($admins as $admin) {
            UserModel::create($admin);
        }
    }
}
