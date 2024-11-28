<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $categories = [
            'Romanzo',
            'Saggio',
            'Biografia',
            'Fantasy',
            'Giallo',
            'Storia'
        ];

        foreach ($categories as $category) {
            Category::create(['name' => $category]);
        }

        // Seed authors
        Author::factory(10)->create();

        // Seed books
        $authors = Author::all();
        $categories = Category::all();

        foreach(range(0, 12) as $ignored){
            Book::factory()->create([
                'author_id' => $authors->random()->id,
                'category_id' => $categories->random()->id,
            ]);
        }
    }
}
