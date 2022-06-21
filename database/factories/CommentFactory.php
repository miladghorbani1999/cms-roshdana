<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Enums\Comment as CommentEnum;
use App\Models\Article;
use App\Models\User;
use App\Models\Video;
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
        $commentable_id = [
            Video::class,
            Article::class
        ];
        return [
            CommentEnum::BODY => $this->faker->text(50),
                        CommentEnum::COMMENTABLE_ID => $this->faker->numberBetween(1,15),
                        CommentEnum::COMMENTABLE_TYPE => $commentable_id[array_rand($commentable_id)],
                        CommentEnum::USER_ID => User::inRandomOrder()->first()->id
        ];
    }
}
