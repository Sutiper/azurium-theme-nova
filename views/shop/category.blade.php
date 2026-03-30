@extends('layouts.app')

@section('title', $category->name . ' - ' . theme_config('server_name', site_name()))

@section('content')

<header class="nova-banner"
    style="background-image: url('{{ theme_asset(theme_config('background_image', 'img/hero-bg.jpg')) }}')">
    <div class="container">
        <h1>{{ $category->name }}</h1>
    </div>
</header>

<section class="nova-section">
    <div class="container">
        <nav aria-label="breadcrumb" class="mb-4">
            <ol class="breadcrumb nova-breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('shop.index') }}">Shop</a></li>
                <li class="breadcrumb-item active">{{ $category->name }}</li>
            </ol>
        </nav>

        @if($packages->isEmpty())
            <p class="text-muted text-center">No items in this category.</p>
        @else
        <div class="row g-4">
            @foreach($packages as $package)
            <div class="col-md-3">
                <div class="nova-product-card">
                    @if($package->image)
                    <img src="{{ $package->imageUrl() }}" alt="{{ $package->name }}" class="product-img">
                    @endif
                    <div class="product-body">
                        <h3>{{ $package->name }}</h3>
                        <p class="text-muted">{{ Str::limit($package->description, 60) }}</p>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <span class="fw-bold text-nova-primary">{{ $package->price }} {{ $package->currency }}</span>
                            <a href="{{ route('shop.package', $package) }}" class="btn btn-nova-primary btn-sm">Buy</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @endif
    </div>
</section>

@endsection
