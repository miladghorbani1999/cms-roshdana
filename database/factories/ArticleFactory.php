<?php

namespace Database\Factories;

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
            ArticleEnum::TITLE       => $this->faker->sentence,
            ArticleEnum::SLUG        => $this->faker->slug,
            ArticleEnum::DESCRIPTION => $this->faker->text,
            ArticleEnum::STATUS      => $this->faker->randomElement(ArticleEnum::STATUS_TYPE),
            ArticleEnum::USER_ID     => $this->faker->numberBetween(1,10),
            ArticleEnum::RELEASE_AT  => now(),
            ArticleEnum::COMMENT     => $this->faker->boolean(),
        ];
    }
}
