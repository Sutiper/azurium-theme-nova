@extends('layouts.app')

@section('title', 'Forum - ' . site_name())

@section('content')

<header class="nova-banner"
    style="background-image: url('{{ theme_asset(theme_config('background_image', 'img/hero-bg.jpg')) }}')">
    <div class="container">
        <h1><i class="bi bi-chat-dots me-2"></i>Forum</h1>
    </div>
</header>

<section class="nova-section">
    <div class="container">
        <nav aria-label="breadcrumb" class="mb-4">
            <ol class="breadcrumb nova-breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item active">Forum</li>
            </ol>
        </nav>

        <div class="row">
            <div class="col-lg-9">
                @foreach($categories as $category)
                <div class="nova-forum-category">
                    <div class="category-header">{{ $category->name }}</div>
                    @foreach($category->children as $forum)
                    <div class="nova-forum-row">
                        <div style="flex:0 0 48px;text-align:center;">
                            <i class="bi bi-chat fs-4 text-nova-primary"></i>
                        </div>
                        <div style="flex:1;">
                            <a href="{{ route('forum.show', $forum) }}" class="fw-semibold d-block">{{ $forum->name }}</a>
                            @if($forum->description)
                            <small class="text-muted">{{ $forum->description }}</small>
                            @endif
                        </div>
                        <div class="text-muted text-end d-none d-md-block" style="flex:0 0 120px;font-size:0.85rem;">
                            {{ $forum->threads_count ?? 0 }} topics<br>
                            {{ $forum->posts_count ?? 0 }} posts
                        </div>
                    </div>
                    @endforeach
                </div>
                @endforeach
            </div>

            <div class="col-lg-3">
                <div class="nova-sidebar-card">
                    <div class="sidebar-header"><i class="bi bi-clock me-1"></i>Latest Posts</div>
                    <div class="sidebar-body">
                        @forelse($latestPosts ?? [] as $lp)
                        <div class="mb-3">
                            <a href="#" class="d-block fw-medium">{{ Str::limit($lp->content, 50) }}</a>
                            <small class="text-muted">{{ $lp->author->name }} &mdash; {{ $lp->created_at->diffForHumans() }}</small>
                        </div>
                        @empty
                        <p class="text-muted mb-0">No posts yet.</p>
                        @endforelse
                    </div>
                </div>

                <div class="nova-sidebar-card">
                    <div class="sidebar-header"><i class="bi bi-bar-chart me-1"></i>Stats</div>
                    <div class="sidebar-body">
                        <ul class="list-unstyled mb-0" style="font-size:0.9rem;color:var(--nova-muted);">
                            <li>Threads: {{ $threadsCount ?? 0 }}</li>
                            <li>Posts: {{ $postsCount ?? 0 }}</li>
                            <li>Members: {{ $usersCount ?? 0 }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
