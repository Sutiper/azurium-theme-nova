@extends('layouts.app')

@section('title', theme_config('server_name', site_name()))

@section('content')

{{-- HERO --}}
<section class="nova-hero text-center"
    style="background-image: url('{{ theme_asset(theme_config('background_image', 'img/hero-bg.jpg')) }}')">
    <div class="container">
        <h1>{{ theme_config('hero_title', site_name()) }}</h1>
        <p class="lead">{{ theme_config('hero_subtitle', 'Join us today!') }}</p>

        <div class="d-flex justify-content-center gap-3 flex-wrap">
            <a href="{{ theme_config('hero_button_link', '/shop') }}" class="btn btn-nova-primary">
                {{ theme_config('hero_button_text', 'Start now') }}
            </a>
            @if(theme_config('discord_link'))
            <a href="{{ theme_config('discord_link') }}" target="_blank" rel="noopener noreferrer" class="btn btn-nova-outline">
                <i class="bi bi-discord me-1"></i>Discord
            </a>
            @endif
        </div>
    </div>
</section>

{{-- LATEST NEWS --}}
@if(isset($posts) && $posts->count())
<section class="nova-section">
    <div class="container">
        <h2 class="mb-4 fw-bold">Latest News</h2>
        <div class="row g-4">
            @foreach($posts->take(3) as $post)
            <div class="col-md-4">
                <div class="nova-card">
                    @if($post->image)
                    <img src="{{ $post->imageUrl() }}" alt="{{ $post->title }}" class="w-100 mb-3" style="border-radius:8px;aspect-ratio:16/9;object-fit:cover;">
                    @endif
                    <h3>{{ $post->title }}</h3>
                    <p class="mt-2">{{ Str::limit(strip_tags($post->content), 100) }}</p>
                    <a href="{{ route('posts.show', $post) }}" class="btn btn-nova-outline btn-sm mt-3">Read more</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif

{{-- FEATURES --}}
<section class="nova-section-dark">
    <div class="container">
        <div class="row g-4 text-center">
            <div class="col-md-4">
                <div class="nova-card">
                    <i class="bi bi-lightning-charge fs-2 text-nova-primary mb-3 d-block"></i>
                    <h3>Fast</h3>
                    <p>Optimized for maximum performance and low latency.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="nova-card">
                    <i class="bi bi-shield-check fs-2 text-nova-primary mb-3 d-block"></i>
                    <h3>Secure</h3>
                    <p>Up-to-date dependencies and strong anti-cheat protection.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="nova-card">
                    <i class="bi bi-people fs-2 text-nova-primary mb-3 d-block"></i>
                    <h3>Community</h3>
                    <p>Active forum, Discord server and weekly events.</p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
