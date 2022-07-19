<?php

namespace Database\Factories;

use App\Models\Author;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Enums\Video as VideoEnum;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Storage;

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

        $release_at = now()->subMinutes(rand(0, 525_600));
        $random_file = explode('/',Arr::random(Storage::disk('public')->files('images/posts')));
        return [
            VideoEnum::AUTHOR_ID   => Author::inRandomOrder()->first()->id,
            VideoEnum::TITLE       => $this->faker->sentence,
            VideoEnum::DESCRIPTION => $this->faker->text,
            VideoEnum::DURATION    => $this->faker->numberBetween(1_000,100_000),
            VideoEnum::RELEASE_AT  => $release_at,
            VideoEnum::UID         => $this->faker->uuid,
            VideoEnum::MAIN_IMAGE  => Arr::random([$random_file[2],$random_file[2], null]), //Use Storage::files
            VideoEnum::CREATED_AT  => $release_at->subMinutes(rand(0, 7_200))
        ];
    }
}
