<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Loquere Library')</title>
    <meta name="description" content="A thoughtful catalog for curious readers.">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<nav class="navbar navbar-expand-lg site-nav">
    <div class="container py-2">
        <a class="navbar-brand" href="{{ route('home') }}">loquere<span>.</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mainNav">
            <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-3">
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('catalog') ? 'active' : '' }}" href="{{ route('catalog') }}">Catalog</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">About</a></li>
                <li class="nav-item ms-lg-2"><a class="btn btn-dark btn-sm px-3" href="{{ route('catalog') }}">Explore books <span aria-hidden="true">&rarr;</span></a></li>
            </ul>
        </div>
    </div>
</nav>
<main>@yield('content')</main>
<footer class="site-footer mt-5">
    <div class="container py-4 d-flex flex-column flex-md-row justify-content-between gap-2">
        <span class="footer-mark">loquere.</span><span>Made for slow reading and bright ideas.</span>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
