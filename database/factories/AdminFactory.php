<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Enums\Admin as AdminEnum;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Admin>
 */
class AdminFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $phone_number = "09".$this->faker->randomNumber('10');
        return [
            AdminEnum::NATIONAL_CODE  => $this->faker->randomNumber('10'),
            AdminEnum::ACTIVITY       => true,
            AdminEnum::MOBILE          => $phone_number,
            AdminEnum::USER_ID   => 1,
        ];
    }
}
