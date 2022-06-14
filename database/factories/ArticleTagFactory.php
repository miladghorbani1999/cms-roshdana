<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Enums\Tag as TagEnum;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ArticleTagFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            TagEnum::ARTICLE_ID => $this->faker->numberBetween(1, 3),
            TagEnum::TAG_ID     => $this->faker->numberBetween(1, 3),
        ];
    }
}
