<?php

namespace Tests\Feature;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class LibraryTest extends TestCase
{
    use RefreshDatabase;

    public function test_library_pages_display_seeded_books(): void
    {
        Category::factory()->create(['name' => 'Fiction']);
        Book::factory()->create([
            'category_id' => Category::first()->id,
            'title' => 'A Test Book',
            'is_featured' => true,
        ]);

        $this->get('/')->assertOk()->assertSee('A Test Book');
        $this->get('/catalog')->assertOk()->assertSee('A Test Book');
        $this->get('/about')->assertOk()->assertSee('A quieter way to find');
    }
}
