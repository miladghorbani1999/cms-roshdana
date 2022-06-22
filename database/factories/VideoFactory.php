<?php

namespace Database\Factories;

use App\Models\Author;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Enums\Video as VideoEnum;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Video>
 */
class VideoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            VideoEnum::TITLE       => $this->faker->sentence,
            videoEnum::DESCRIPTION => $this->faker->text,
            VideoEnum::MAIN_IMAGE  => basename($this->faker->image(storage_path('app/public'))),
            videoEnum::DURATION    => $this->faker->numberBetween(1000,100000),
            videoEnum::RELEASE_AT  => now(),
            videoEnum::UID         => $this->faker->uuid,
        ];
    }
}
