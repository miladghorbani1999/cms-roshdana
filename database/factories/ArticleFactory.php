<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Author;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Enums\Article as ArticleEnum;

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
            ArticleEnum::TITLE       => $this->faker->text(50),
            ArticleEnum::CATEGORY_ID => $this->faker->numberBetween(1,6),
            ArticleEnum::SLUG        => $this->faker->slug,
            ArticleEnum::DESCRIPTION => $this->faker->text(),
            ArticleEnum::STATUS      => $this->faker->randomElement(ArticleEnum::STATUS_TYPE),
            ArticleEnum::RELEASE_AT  => now(),
            ArticleEnum::IS_COMMENTABLE => $this->faker->boolean(),
        ];
    }
}
