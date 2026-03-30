@extends('layouts.app')

@section('title', 'FAQ - ' . site_name())

@section('content')

<header class="nova-banner"
    style="background-image: url('{{ theme_asset(theme_config('background_image', 'img/hero-bg.jpg')) }}')">
    <div class="container">
        <h1><i class="bi bi-question-circle me-2"></i>FAQ</h1>
    </div>
</header>

<section class="nova-section">
    <div class="container" style="max-width:800px;">
        <nav aria-label="breadcrumb" class="mb-4">
            <ol class="breadcrumb nova-breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item active">FAQ</li>
            </ol>
        </nav>

        @if(isset($elements) && $elements->count())
        <div class="accordion" id="faqAccordion">
            @foreach($elements as $index => $element)
            <div class="nova-faq-item">
                <div class="accordion-item" style="background:transparent;border:none;">
                    <h2 class="accordion-header">
                        <button class="accordion-button {{ $index > 0 ? 'collapsed' : '' }}"
                                type="button" data-bs-toggle="collapse"
                                data-bs-target="#faq{{ $index }}">
                            {{ $element->title }}
                        </button>
                    </h2>
                    <div id="faq{{ $index }}" class="accordion-collapse collapse {{ $index === 0 ? 'show' : '' }}"
                         data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            {!! $element->content !!}
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @else
        <p class="text-muted text-center">No FAQ entries yet.</p>
        @endif
    </div>
</section>

@endsection
