<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
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
        return [
            UserEnum::NAME           => $this->faker->name(),
            UserEnum::LAST_NAME      => $this->faker->lastName(),
            UserEnum::EMAIL          => $this->faker->unique()->safeEmail(),
            UserEnum::EMAIL_VERIFY   => now(),
            UserEnum::PASSWORD       => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            UserEnum::REMEMBER_TOKEN => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                UserEnum::EMAIL_VERIFY => null,
            ];
        });
    }
}
