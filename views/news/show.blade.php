@extends('layouts.app')

@section('title', $post->title . ' - ' . theme_config('server_name', site_name()))

@section('content')

<header class="nova-banner"
    @if($post->image) style="background-image: url('{{ $post->imageUrl() }}')" @else style="background-image: url('{{ theme_asset(theme_config('background_image', 'img/hero-bg.jpg')) }}')" @endif>
    <div class="container">
        <h1>{{ $post->title }}</h1>
        <p class="mt-2 text-muted">{{ $post->created_at->translatedFormat('F j, Y') }} &mdash; {{ $post->author->name }}</p>
    </div>
</header>

<section class="nova-section">
    <div class="container" style="max-width:800px;">
        <nav aria-label="breadcrumb" class="mb-4">
            <ol class="breadcrumb nova-breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('posts.index') }}">News</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $post->title }}</li>
            </ol>
        </nav>
        <div class="nova-card">
            <div class="nova-page-content">
                {!! $post->content !!}
            </div>
        </div>
    </div>
</section>

@endsection
