<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin as AdminModel;
use App\Enums\Admin  as AdminEnum;
class AdminSeeder extends Seeder
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
                AdminEnum::NATIONAL_CODE => '1272995178',
                AdminEnum::ACTIVITY => true,
                AdminEnum::USER_ID => '1',
            ],
            [
                AdminEnum::NATIONAL_CODE => '1100466691',
                AdminEnum::ACTIVITY => false,
                AdminEnum::USER_ID => '1',
            ]
        ];

        foreach ($admins as $admin) {
            AdminModel::create($admin);
        }
    }
}
