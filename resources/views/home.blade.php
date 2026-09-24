@extends('layouts.app')

@section('title', 'Loquere Library | Read with intent')

@section('content')
<section class="hero-section">
    <div class="container py-5 py-lg-6">
        <div class="row align-items-end g-5">
            <div class="col-lg-7">
                <p class="eyebrow">A library for the curious</p>
                <h1>Find a book<br><em>worth your time.</em></h1>
                <p class="hero-copy">A calm, considered collection of stories, ideas, and useful questions. Browse less. Read better.</p>
                <a class="btn btn-dark btn-lg px-4" href="{{ route('catalog') }}">Browse the catalog <span aria-hidden="true">&rarr;</span></a>
            </div>
            <div class="col-lg-4 offset-lg-1">
                <div class="hero-note">
                    <span class="note-number">01</span>
                    <p>“The right book does not fill your time. It changes its shape.”</p>
                    <span class="note-caption">The Loquere reading principle</span>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="container stats-row py-4">
    <div class="row g-0">
        <div class="col-6 col-md-3 stat-item"><strong>{{ $bookCount }}</strong><span>books in the collection</span></div>
        <div class="col-6 col-md-3 stat-item"><strong>{{ $categoryCount }}</strong><span>ways to wander</span></div>
        <div class="col-12 col-md-6 stat-item stat-text"><span>Updated regularly<br>for fresh discoveries.</span></div>
    </div>
</section>
<section class="container py-5">
    <div class="section-heading d-flex justify-content-between align-items-end mb-4">
        <div><p class="eyebrow">Curator's shelf</p><h2>Featured reads</h2></div>
        <a class="text-link d-none d-sm-block" href="{{ route('catalog') }}">See all books &rarr;</a>
    </div>
    <div class="row g-4">
        @forelse($featuredBooks as $book)
            <div class="col-md-4"><article class="book-card h-100"><div class="book-cover"><span>{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</span><i>{{ $book->category->name }}</i></div><div class="pt-3"><p class="book-category">{{ $book->category->name }} / {{ $book->published_year }}</p><h3>{{ $book->title }}</h3><p class="book-author">{{ $book->author }}</p><p class="book-summary">{{ Str::limit($book->summary, 105) }}</p></div></article></div>
        @empty
            <div class="col-12"><div class="empty-state">The featured shelf is being arranged. Visit the catalog to browse the full collection.</div></div>
        @endforelse
    </div>
</section>
@endsection
