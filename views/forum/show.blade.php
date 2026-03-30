@extends('layouts.app')

@section('title', $forum->name . ' - ' . site_name())

@section('content')

<div class="nova-page-header text-center text-white py-5">
    <div class="container">
        <h1 class="fw-bold">{{ $forum->name }}</h1>
        @if($forum->description)
            <p class="text-muted">{{ $forum->description }}</p>
        @endif
    </div>
</div>

<div class="container py-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('forum.index') }}">Forum</a></li>
                <li class="breadcrumb-item active">{{ $forum->name }}</li>
            </ol>
        </nav>
        @auth
            <a href="{{ route('forum.threads.create', $forum) }}" class="btn btn-nova-primary">
                <i class="bi bi-plus me-1"></i>New Thread
            </a>
        @endauth
    </div>

    @forelse($threads as $thread)
        <div class="nova-card mb-3 p-4 d-flex align-items-center gap-4">
            <div class="flex-fill">
                <h3 class="h5 mb-1">
                    <a href="{{ route('forum.threads.show', [$forum, $thread]) }}" class="text-white text-decoration-none">
                        {{ $thread->title }}
                    </a>
                </h3>
                <small class="text-muted">
                    By <a href="{{ route('profile', $thread->author) }}">{{ $thread->author->name }}</a>
                    &mdash; {{ $thread->created_at->diffForHumans() }}
                </small>
            </div>
            <div class="text-end text-muted small">
                <div>{{ $thread->posts_count }} replies</div>
            </div>
        </div>
    @empty
        <div class="nova-card p-5 text-center text-muted">
            No threads yet. Be the first to post!
        </div>
    @endforelse

    <div class="mt-4">
        {{ $threads->links() }}
    </div>
</div>

@endsection
