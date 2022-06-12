<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use app\Enums\Author as AuthorEnum;
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

            AuthorEnum::CITY  => $this->faker->text('50'),
            AuthorEnum::LEVEL       => true,
            AuthorEnum::USER_ID     => 1,
        ];
    }
}
