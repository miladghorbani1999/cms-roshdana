<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Enums\Comment as CommentEnum;
use App\Models\Article;
use App\Models\User;
use App\Models\Video;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            CommentEnum::BODY => $this->faker->realText(),
            CommentEnum::COMMENTABLE_ID => User::inRandomOrder()->first()->id,
        ];
    }
}
