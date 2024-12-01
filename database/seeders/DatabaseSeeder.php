<?php

namespace Database\Seeders;

use App\Models\Artwork;
use App\Models\User;
use App\Models\Article;
use App\Models\Music;
use App\Models\Collection;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        Music::factory(10)->create();
        Article::factory(10)->create();

        $artworks = Artwork::factory(40)->create();
        $collections = Collection::factory(5)->create();

        foreach ($artworks as $artwork) {
            // Randomly attach 1 to 3 collections to each artwork
            $artwork->collections()->attach(
                $collections->random(rand(1, 3))->pluck('id')->toArray()
            );
        }
    }
}
