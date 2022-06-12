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
        return [
            AdminEnum::NATIONAL_CODE  => $this->faker->numerify('#########'),
            AdminEnum::ACTIVITY       => true,
            AdminEnum::USER_ID   => 1,
        ];
    }
}
