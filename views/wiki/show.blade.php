@extends('layouts.app')

@section('title', $element->title . ' - ' . site_name())

@section('content')

<header class="nova-banner"
    style="background-image: url('{{ theme_asset(theme_config('background_image', 'img/hero-bg.jpg')) }}')">
    <div class="container">
        <h1>{{ $element->title }}</h1>
    </div>
</header>

<section class="nova-section">
    <div class="container" style="max-width:900px;">
        <nav aria-label="breadcrumb" class="mb-4">
            <ol class="breadcrumb nova-breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('wiki.index') }}">Wiki</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $element->title }}</li>
            </ol>
        </nav>
        <div class="nova-card">
            <div class="nova-page-content">
                {!! $element->content !!}
            </div>
        </div>
    </div>
</section>

@endsection
