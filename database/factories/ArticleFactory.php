<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use Illuminate\Support\Str;

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
    public function definition(): array
    {
        return [
            'title' => $title = fake()->unique()->sentence(),
            'description' => fake()->unique()->sentence(),
            'content' => implode('-', fake()->paragraphs()),
            'slug' => Str::slug($title),
            'isvisible' => true
        ];
    }
}
