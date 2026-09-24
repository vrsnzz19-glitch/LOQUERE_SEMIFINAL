@extends('layouts.app')

@section('title', 'Catalog | Loquere Library')

@section('content')
<section class="page-intro"><div class="container py-5"><p class="eyebrow">The collection</p><h1>Browse the<br><em>good stuff.</em></h1><p class="hero-copy">Fifty starting points for your next excellent afternoon.</p></div></section>
<section class="container py-5">
    <div class="catalog-meta d-flex justify-content-between align-items-center mb-4"><span>{{ $books->total() }} books / page {{ $books->currentPage() }}</span><span class="small-muted">Sorted by newest</span></div>
    <div class="row g-4">
        @foreach($books as $book)
            <div class="col-md-6 col-lg-4"><article class="catalog-card h-100"><div class="catalog-number">{{ str_pad($book->id, 2, '0', STR_PAD_LEFT) }} <span>{{ $book->category->name }}</span></div><h2>{{ $book->title }}</h2><p class="book-author">by {{ $book->author }}</p><p class="book-summary">{{ $book->summary }}</p><div class="card-footer-line"><span>{{ $book->published_year }}</span><span>{{ $book->reading_time }} min read</span></div></article></div>
        @endforeach
    </div>
    <div class="mt-5">{{ $books->links() }}</div>
</section>
@endsection
