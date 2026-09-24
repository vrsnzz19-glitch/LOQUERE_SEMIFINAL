<?php

namespace Database\Factories;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'category_id' => Category::factory(),
            'title' => fake()->sentence(3),
            'author' => fake()->name(),
            'summary' => fake()->paragraph(2),
            'published_year' => fake()->numberBetween(1980, 2026),
            'reading_time' => fake()->numberBetween(5, 40),
            'is_featured' => fake()->boolean(20),
        ];
    }
}
