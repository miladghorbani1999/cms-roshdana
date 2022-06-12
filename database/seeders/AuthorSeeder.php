<?php

namespace Database\Seeders;

use App\Enums\Author as AuthorEnum;
use Illuminate\Database\Seeder;
use App\Models\Author as AuthorModel;
class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $authors = [
            [
                AuthorEnum::CITY => 'اصفهان',
                AuthorEnum::LEVEL => AuthorEnum::JUNIOR,
                AuthorEnum::USER_ID => '1',
            ],
            [
                AuthorEnum::CITY => 'تهران',
                AuthorEnum::LEVEL => AuthorEnum::SENIOR,
                AuthorEnum::USER_ID => '2',
            ],
            [
                AuthorEnum::CITY => 'شیراز',
                AuthorEnum::LEVEL => AuthorEnum::MIDLEVEL,
                AuthorEnum::USER_ID => '3',
            ]
        ];

        foreach ($authors as $author) {
            AuthorModel::create($author);
        }
    }
}
