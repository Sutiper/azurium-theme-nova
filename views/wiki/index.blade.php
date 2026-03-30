@extends('layouts.app')

@section('title', 'Wiki - ' . theme_config('server_name', site_name()))

@section('content')

<header class="nova-banner"
    style="background-image: url('{{ theme_asset(theme_config('background_image', 'img/hero-bg.jpg')) }}')">
    <div class="container">
        <h1><i class="bi bi-book me-2"></i>Wiki</h1>
    </div>
</header>

<section class="nova-section">
    <div class="container">
        <nav aria-label="breadcrumb" class="mb-4">
            <ol class="breadcrumb nova-breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item active">Wiki</li>
            </ol>
        </nav>

        @if(isset($categories) && $categories->count())
        <div class="row g-4">
            @foreach($categories as $category)
            <div class="col-md-4">
                <div class="nova-wiki-card">
                    <h3>{{ $category->name }}</h3>
                    @if($category->description)
                    <p class="text-muted">{{ $category->description }}</p>
                    @endif
                    <ul class="list-unstyled mt-3 mb-0">
                        @foreach($category->elements->take(5) as $element)
                        <li>
                            <a href="{{ route('wiki.show', $element) }}" class="d-flex align-items-center gap-2 py-1">
                                <i class="bi bi-file-text"></i>{{ $element->title }}
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            @endforeach
        </div>
        @else
        <p class="text-muted text-center">No wiki articles yet.</p>
        @endif
    </div>
</section>

@endsection
