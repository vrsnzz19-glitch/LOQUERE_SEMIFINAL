<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $categories = collect([
            ['name' => 'Fiction', 'description' => 'Stories that open doors into imagined worlds and unforgettable lives.'],
            ['name' => 'Science', 'description' => 'Curious, rigorous ideas for understanding the world around us.'],
            ['name' => 'History', 'description' => 'People, places, and turning points that shaped the present.'],
            ['name' => 'Design', 'description' => 'Practical and thoughtful ways to make better things.'],
            ['name' => 'Technology', 'description' => 'Clear thinking about tools, systems, and the future.'],
        ])->map(fn (array $category): Category => Category::create($category));

        $categories->each(fn (Category $category): mixed => Book::factory(10)->create([
            'category_id' => $category->id,
        ]));
    }
}
