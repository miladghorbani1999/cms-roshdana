<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Enums\Image as ImageEnum;
use App\Models\User as UserModel;
use App\Models\Article as ArticleModel;
use App\Models\video as VideoModel;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Image>
 */
class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [

            ImageEnum::URL            => 'image/'.$this->faker->text(10),
            ImageEnum::IMAGEABLE_ID   => $this->faker->numberBetween(1,10),
            ImageEnum::IMAGEABLE_TYPE => $this->faker->randomElement([
                                            UserModel::class,
                                            VideoModel::class,
                                            ArticleModel::class,
                                        ]),
        ];
    }
}
