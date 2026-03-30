@extends('layouts.app')

@section('title', 'Vote - ' . theme_config('server_name', site_name()))

@section('content')

<header class="nova-banner"
    style="background-image: url('{{ theme_asset(theme_config('background_image', 'img/hero-bg.jpg')) }}')">
    <div class="container">
        <h1><i class="bi bi-star me-2"></i>Vote</h1>
        <p class="text-muted mt-2">Support us by voting on server lists!</p>
    </div>
</header>

<section class="nova-section">
    <div class="container">
        <nav aria-label="breadcrumb" class="mb-4">
            <ol class="breadcrumb nova-breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item active">Vote</li>
            </ol>
        </nav>

        @if(isset($sites) && $sites->count())
        <div class="row g-4">
            @foreach($sites as $site)
            <div class="col-md-4">
                <div class="nova-vote-card">
                    <h3>{{ $site->name }}</h3>
                    <p class="text-muted">{{ $site->url }}</p>
                    <a href="{{ $site->url }}" target="_blank" rel="noopener noreferrer" class="btn btn-nova-primary mt-auto">
                        <i class="bi bi-box-arrow-up-right me-1"></i>Vote
                    </a>
                </div>
            </div>
            @endforeach
        </div>
        @else
        <p class="text-muted text-center">No vote sites configured yet.</p>
        @endif
    </div>
</section>

@endsection
