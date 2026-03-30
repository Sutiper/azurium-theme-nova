@extends('layouts.app')

@section('title', $page->title . ' - ' . site_name())

@section('content')

<header class="nova-banner"
    style="background-image: url('{{ theme_asset(theme_config('background_image', 'img/hero-bg.jpg')) }}')">
    <div class="container">
        <h1>{{ $page->title }}</h1>
    </div>
</header>

<section class="nova-section">
    <div class="container">
        <nav aria-label="breadcrumb" class="mb-4">
            <ol class="breadcrumb nova-breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $page->title }}</li>
            </ol>
        </nav>
        <div class="nova-card">
            <div class="nova-page-content">
                {!! $page->content !!}
            </div>
        </div>
    </div>
</section>

@endsection
