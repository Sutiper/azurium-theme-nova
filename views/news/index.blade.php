@extends('layouts.app')

@section('title', 'News - ' . site_name())

@section('content')

<header class="nova-banner"
    style="background-image: url('{{ theme_asset(theme_config('background_image', 'img/hero-bg.jpg')) }}')">    <div class="container">
        <h1><i class="bi bi-newspaper me-2"></i>News</h1>
    </div>
</header>

<section class="nova-section">
    <div class="container">
        @if($posts->isEmpty())
            <p class="text-muted text-center">No news yet.</p>
        @else
        <div class="row g-4">
            @foreach($posts as $post)
            <div class="col-md-4">
                <div class="nova-card">
                    @if($post->image)
                    <img src="{{ $post->imageUrl() }}" alt="{{ $post->title }}"
                        class="w-100 mb-3" style="border-radius:8px;aspect-ratio:16/9;object-fit:cover;">
                    @endif
                    <span class="badge" style="background:var(--nova-primary);font-size:0.75rem;">{{ $post->created_at->diffForHumans() }}</span>
                    <h3 class="mt-2">{{ $post->title }}</h3>
                    <p class="mt-1">{{ Str::limit(strip_tags($post->content), 100) }}</p>
                    <a href="{{ route('posts.show', $post) }}" class="btn btn-nova-outline btn-sm mt-3">Read more</a>
                </div>
            </div>
            @endforeach
        </div>

        <div class="mt-5 d-flex justify-content-center">
            {{ $posts->links() }}
        </div>
        @endif
    </div>
</section>

@endsection
