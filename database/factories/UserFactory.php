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
        $files_img = Storage::disk('public')->files('images/avatars');
        $files_img = array_reverse($files_img);
        $first_img = array_pop($files_img);
        $random_file = explode('/',(rand(1,7)<5)?Arr::random($files_img):$first_img);

        return[

            UserEnum::FirstName      =>         $this->faker->firstName(),
            UserEnum::LAST_NAME      =>         $this->faker->lastName(),
            UserEnum::EMAIL          =>         $this->faker->unique()->safeEmail(),
            UserEnum::MOBILE         =>         "09" . $this->faker->numerify('##########'),
            UserEnum::PASSWORD       =>         '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            UserEnum::REMEMBER_TOKEN =>         Str::random(10),
            UserEnum::LAST_LOGIN     =>         now()->subMinutes(rand(0, 525600)), //~ Last 354 days
            UserEnum::IMAGE          =>         $random_file[2],

        ];

    }

}
