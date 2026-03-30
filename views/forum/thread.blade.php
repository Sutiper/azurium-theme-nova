@extends('layouts.app')

@section('title', $thread->title . ' - ' . site_name())

@section('content')

<div class="nova-page-header text-center text-white py-5">
    <div class="container">
        <h1 class="fw-bold">{{ $thread->title }}</h1>
        <small class="text-muted">
            By <a href="{{ route('profile', $thread->author) }}" class="text-white">{{ $thread->author->name }}</a>
            &mdash; {{ $thread->created_at->diffForHumans() }}
        </small>
    </div>
</div>

<div class="container py-5">
    <nav aria-label="breadcrumb" class="mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('forum.index') }}">Forum</a></li>
            <li class="breadcrumb-item"><a href="{{ route('forum.show', $forum) }}">{{ $forum->name }}</a></li>
            <li class="breadcrumb-item active">{{ Str::limit($thread->title, 40) }}</li>
        </ol>
    </nav>

    {{-- Original post --}}
    <div class="nova-card p-4 mb-4">
        <div class="d-flex align-items-center gap-3 mb-3">
            <strong>{{ $thread->author->name }}</strong>
            <span class="text-muted small">{{ $thread->created_at->diffForHumans() }}</span>
        </div>
        <div class="thread-content">
            {!! $thread->content !!}
        </div>
    </div>

    {{-- Replies --}}
    @foreach($posts as $post)
    <div class="nova-card p-4 mb-3">
        <div class="d-flex align-items-center gap-3 mb-3">
            <a href="{{ route('profile', $post->author) }}" class="fw-semibold text-white text-decoration-none">
                {{ $post->author->name }}
            </a>
            <span class="text-muted small">{{ $post->created_at->diffForHumans() }}</span>
        </div>
        <div>{!! $post->content !!}</div>
    </div>
    @endforeach

    {{ $posts->links() }}

    {{-- Reply form --}}
    @auth
    <div class="nova-card p-4 mt-4">
        <h4 class="mb-3">Reply</h4>
        <form method="POST" action="{{ route('forum.posts.store', [$forum, $thread]) }}">
            @csrf
            <div class="mb-3">
                <textarea name="content" class="form-control" rows="5" placeholder="Write your reply...">{{ old('content') }}</textarea>
            </div>
            <button type="submit" class="btn btn-nova-primary">Post Reply</button>
        </form>
    </div>
    @else
    <div class="nova-card p-4 mt-4 text-center text-muted">
        <a href="{{ route('login') }}">Login</a> to reply to this thread.
    </div>
    @endauth
</div>

@endsection
