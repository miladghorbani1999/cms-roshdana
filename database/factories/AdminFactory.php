<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Enums\Admin as AdminEnum;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class AdminFactory extends Factory{

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [

            AdminEnum::USER_ID => User::factory(),
            AdminEnum::NATIONAL_CODE => $this->faker->unique()->numerify('#########'),
            AdminEnum::IsActive => rand(1,10) < 8,

        ];
    }
}
