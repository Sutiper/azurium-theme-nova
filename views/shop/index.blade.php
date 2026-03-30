@extends('layouts.app')

@section('title', 'Shop - ' . theme_config('server_name', site_name()))

@section('content')

<header class="nova-banner"
    style="background-image: url('{{ theme_asset(theme_config('background_image', 'img/hero-bg.jpg')) }}')">
    <div class="container">
        <h1><i class="bi bi-cart me-2"></i>Shop</h1>
    </div>
</header>

<section class="nova-section">
    <div class="container">
        <nav aria-label="breadcrumb" class="mb-4">
            <ol class="breadcrumb nova-breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item active">Shop</li>
            </ol>
        </nav>

        @if(isset($categories) && $categories->count())
        <div class="row g-4">
            @foreach($categories as $category)
            <div class="col-md-3">
                <a href="{{ route('shop.category', $category) }}" class="text-decoration-none">
                    <div class="nova-card text-center">
                        @if($category->image)
                        <img src="{{ $category->imageUrl() }}" alt="{{ $category->name }}"
                             class="mb-3" style="width:64px;height:64px;object-fit:contain;">
                        @endif
                        <h3>{{ $category->name }}</h3>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
        @else
        <p class="text-muted text-center">No categories yet.</p>
        @endif
    </div>
</section>

@endsection
