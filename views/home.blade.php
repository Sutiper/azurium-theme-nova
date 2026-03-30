@extends('layouts.app')

@section('title', site_name())

@section('content')

{{-- HERO --}}
<section class="nova-hero text-center"
    style="background-image: url('{{ theme_asset(theme_config('background_image', 'img/hero-bg.jpg')) }}')">
    <div class="container">
        <h1>{{ theme_config('hero_title', site_name()) }}</h1>
        <p class="lead">{{ theme_config('hero_subtitle', 'Join us today!') }}</p>
        <div class="d-flex justify-content-center gap-3 flex-wrap mt-4">
            <a href="{{ theme_config('hero_button_link', '/shop') }}" class="btn btn-nova-primary">
                {{ theme_config('hero_button_text', 'Start now') }}
            </a>
            @if(theme_config('discord_link'))
            <a href="{{ theme_config('discord_link') }}" target="_blank" rel="noopener noreferrer" class="btn btn-nova-outline">
                <i class="bi bi-discord me-1"></i>Discord
            </a>
            @endif
            @if(theme_config('server_ip'))
            <button class="btn btn-nova-outline"
                onclick="navigator.clipboard.writeText('{{ theme_config('server_ip') }}');this.innerHTML='<i class=bi bi-check2></i> Copied!';setTimeout(()=>this.innerHTML='<i class=bi bi-clipboard></i> {{ theme_config('server_ip') }}',2000)">
                <i class="bi bi-clipboard me-1"></i>{{ theme_config('server_ip') }}
            </button>
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
                <div class="nova-card h-100">
                    @if($post->image)
                    <img src="{{ $post->imageUrl() }}" alt="{{ $post->title }}" class="nova-card-img">
                    @endif
                    <div class="p-4">
                        <h3 class="h5">{{ $post->title }}</h3>
                        <p class="text-muted small">{{ Str::limit(strip_tags($post->content), 100) }}</p>
                        <a href="{{ route('posts.show', $post) }}" class="btn btn-nova-outline btn-sm">Read more</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif

{{-- FEATURES --}}
<section class="nova-section nova-features">
    <div class="container">
        <div class="row g-4 text-center">
            <div class="col-md-4">
                <div class="nova-card p-4">
                    <i class="bi bi-speedometer2 fs-1 text-primary mb-3 d-block"></i>
                    <h4>Fast</h4>
                    <p class="text-muted">Every component is optimized for unmatched performance.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="nova-card p-4">
                    <i class="bi bi-shield-lock fs-1 text-primary mb-3 d-block"></i>
                    <h4>Secure</h4>
                    <p class="text-muted">With up-to-date dependencies, security is strong.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="nova-card p-4">
                    <i class="bi bi-patch-check fs-1 text-primary mb-3 d-block"></i>
                    <h4>Modern</h4>
                    <p class="text-muted">Built with the latest technologies and solid patterns.</p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
