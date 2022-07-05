<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Enums\Category as CategoryEnum;
use App\Models\Category as ModelCategory;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names = [
            'تکنولوژی',
            'بین‌المللی',
            'مذهبی',
            'سیاسی',
            'اقتصادی',
            'متفرقه',
        ];
        foreach($names as $name){
            ModelCategory::create(['name' => $name]);
        }

    }
}
