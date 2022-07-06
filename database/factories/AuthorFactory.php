<?php

namespace Database\Factories;

use App\Models\City;
use App\Models\User;
use Illuminate\Support\Arr;
use App\Enums\Author as AuthorEnum;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Auther>
 */
class AuthorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [

            AuthorEnum::USER_ID     =>  User::factory(),
            AuthorEnum::CITY_ID     =>  City::inRandomOrder()->first('id')->id,
            AuthorEnum::LEVEL       =>  Arr::random(AuthorEnum::STATUSES),

        ];
    }
}
