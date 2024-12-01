<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Music>
 */
class MusicFactory extends Factory
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
            'lyrics' => implode(' ', fake()->paragraphs()),  
            'isvisible' => true,
            'file_url' => 'https://diviextended.com/wp-content/uploads/2021/10/sound-of-waves-marine-drive-mumbai.mp3',
            'slug' => Str::slug($title)
        ];
    }
}
