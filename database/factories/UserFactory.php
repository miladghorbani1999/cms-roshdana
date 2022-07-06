<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Enums\User as UserEnum;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return[

            UserEnum::FirstName      =>         $this->faker->firstName(),
            UserEnum::LAST_NAME      =>         $this->faker->lastName(),
            UserEnum::EMAIL          =>         $this->faker->unique()->safeEmail(),
            UserEnum::MOBILE         =>         "09" . $this->faker->numerify('##########'),
            UserEnum::PASSWORD       =>         '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            UserEnum::REMEMBER_TOKEN =>         Str::random(10),
            UserEnum::LAST_LOGIN     =>         now()->subMinutes(rand(0, 525600)), //~ Last 354 days
            UserEnum::IMAGE          =>         (rand(1, 10) < 9) ? 'avatar' . rand(0, 10) . '.jpeg' : null,

        ];

    }

}
