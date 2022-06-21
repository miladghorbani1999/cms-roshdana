<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Enums\Tag as TagEnum;
use App\Models\Article;
use App\Models\Tag;

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
            TagEnum::ARTICLE_ID => Article::inRandomOrder()->first()->id,
            TagEnum::TAG_ID     => Tag::inRandomOrder()->first()->id,
        ];
    }
}
