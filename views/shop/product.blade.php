@extends('layouts.app')

@section('title', $offer->name . ' - ' . site_name())

@section('content')

<div class="nova-page-header text-center text-white py-5">
    <div class="container">
        <h1 class="fw-bold">{{ $offer->name }}</h1>
        <nav aria-label="breadcrumb" class="mt-3">
            <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('shop.index') }}">Shop</a></li>
                @if($offer->category)
                    <li class="breadcrumb-item"><a href="{{ route('shop.category', $offer->category) }}">{{ $offer->category->name }}</a></li>
                @endif
                <li class="breadcrumb-item active">{{ $offer->name }}</li>
            </ol>
        </nav>
    </div>
</div>

<div class="container py-5">
    <div class="row g-5">
        {{-- Product image --}}
        <div class="col-md-5">
            @if($offer->image)
                <img src="{{ $offer->imageUrl() }}" alt="{{ $offer->name }}"
                     class="w-100 rounded" style="aspect-ratio:1/1;object-fit:cover;">
            @else
                <div class="nova-card d-flex align-items-center justify-content-center"
                     style="height:300px;">
                    <i class="bi bi-box-seam fs-1 text-muted"></i>
                </div>
            @endif
        </div>

        {{-- Product info --}}
        <div class="col-md-7">
            <div class="nova-card p-4">
                <h2 class="fw-bold mb-2">{{ $offer->name }}</h2>

                <div class="mb-4">
                    <span class="fs-3 fw-bold text-primary">
                        {{ $offer->price > 0 ? $offer->price . ' ' . $currency->symbol : 'Free' }}
                    </span>
                </div>

                @if($offer->description)
                    <div class="mb-4 text-muted">
                        {!! $offer->description !!}
                    </div>
                @endif

                @auth
                    <form method="POST" action="{{ route('shop.offers.buy', $offer) }}">
                        @csrf
                        <div class="mb-3">
                            <label for="quantity" class="form-label">Quantity</label>
                            <input type="number" name="quantity" id="quantity"
                                   class="form-control" value="1" min="1"
                                   @if($offer->max_quantity) max="{{ $offer->max_quantity }}" @endif>
                        </div>
                        <button type="submit" class="btn btn-nova-primary w-100">
                            <i class="bi bi-cart-plus me-2"></i>Buy Now
                        </button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="btn btn-nova-primary w-100">
                        <i class="bi bi-box-arrow-in-right me-2"></i>Login to Purchase
                    </a>
                @endauth
            </div>
        </div>
    </div>
</div>

@endsection
