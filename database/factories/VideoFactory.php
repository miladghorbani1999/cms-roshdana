<?php

namespace Database\Factories;

use App\Models\Author;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Enums\Video as VideoEnum;
use Illuminate\Support\Arr;

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
            VideoEnum::TITLE       => $this->faker->realText(),
            videoEnum::DESCRIPTION => $this->faker->realText(),
            videoEnum::DURATION    => $this->faker->numberBetween(1000,100000),
            videoEnum::RELEASE_AT  => now(),
            videoEnum::UID         => $this->faker->uuid,
            videoEnum::MAIN_IMAGE  => Arr::random(['sample1.jpg', 'sample2.jpg', 'sample3.jpg', null, null]),
        ];
    }
}
