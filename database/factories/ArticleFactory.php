<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Author;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Enums\Article as ArticleEnum;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [

            ArticleEnum::AUTHOR_ID       =>     Author::inRandomOrder()->first('id')->id,
            ArticleEnum::CATEGORY_ID     =>     Category::inRandomOrder()->first('id')->id,
            ArticleEnum::TITLE           =>     $this->faker->realText(50),
            ArticleEnum::SLUG            =>     $this->faker->slug,
            ArticleEnum::DESCRIPTION     =>     $this->faker->realText(),
            ArticleEnum::STATUS          =>     $this->faker->randomElement(ArticleEnum::STATUS_TYPE),
            ArticleEnum::RELEASE_AT      =>     now()->subMinutes(rand(0, 525600)), //~ Last 354 days
            ArticleEnum::IS_COMMENTABLE  =>     $this->faker->boolean(),
            ArticleEnum::MAIN_IMAGE      =>     'post'.rand(0,10).'.png',

        ];
    }
}
