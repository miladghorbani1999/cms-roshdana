<?php

namespace Database\Seeders;

use App\Enums\BaseEnum;
use Illuminate\Database\Seeder;
use App\Enums\Category as CategoryEnum;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $categories = [
            [BaseEnum::ID => 1,     CategoryEnum::NAME => 'تکنولوژی' ],
            [BaseEnum::ID => 2,     CategoryEnum::NAME => 'بین‌المللی' ],
            [BaseEnum::ID => 3,     CategoryEnum::NAME => 'مذهبی' ],
            [BaseEnum::ID => 4,     CategoryEnum::NAME => 'سیاسی' ],
            [BaseEnum::ID => 5,     CategoryEnum::NAME => 'اقتصادی' ],
            [BaseEnum::ID => 6,     CategoryEnum::NAME => 'متفرقه' ],
        ];

        Category::insert($categories);

    }
}
