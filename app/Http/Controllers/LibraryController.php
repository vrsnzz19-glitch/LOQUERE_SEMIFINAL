<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Contracts\View\View;

class LibraryController extends Controller
{
    public function home(): View
    {
        return view('home', [
            'featuredBooks' => Book::with('category')->where('is_featured', true)->latest()->take(3)->get(),
            'bookCount' => Book::count(),
            'categoryCount' => Category::count(),
        ]);
    }

    public function catalog(): View
    {
        return view('catalog', [
            'books' => Book::with('category')->latest()->paginate(12),
        ]);
    }

    public function about(): View
    {
        return view('about');
    }
}
