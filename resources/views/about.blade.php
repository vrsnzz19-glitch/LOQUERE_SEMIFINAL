@extends('layouts.app')

@section('title', 'About | Loquere Library')

@section('content')
<section class="page-intro"><div class="container py-5"><p class="eyebrow">Why Loquere exists</p><h1>A quieter way to find<br><em>your next book.</em></h1></div></section>
<section class="container py-5"><div class="row g-5"><div class="col-lg-5"><p class="display-note">We believe a library can feel like a conversation, not a warehouse.</p></div><div class="col-lg-6 offset-lg-1 about-copy"><p>Loquere is a small reading room for people who want to follow a thread of curiosity. Our catalog brings together fiction, science, history, design, and technology without asking you to perform your taste.</p><p>Every entry is a nudge: a title, a voice, and enough context to help you decide whether this is the book for today.</p><div class="rule"></div><p class="small-muted">Built with Laravel, Eloquent, Blade, and Bootstrap.</p></div></div></section>
@endsection
