<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ArticleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Article::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "title" => $this->faker->sentence(3),
            "description" => $this->faker->paragraph(3),
            "body" => $this->faker->paragraph(100),
            "tags" => json_encode([$this->faker->word(), $this->faker->word(), $this->faker->word()]),
            "user_id" => function () {
                return \App\Models\User::all()->random();
            }
        ];
    }
}