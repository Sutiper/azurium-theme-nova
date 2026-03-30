<nav class="navbar navbar-expand-lg nova-navbar">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
            <img src="{{ theme_asset('img/logo.png') }}" alt="{{ theme_config('server_name', site_name()) }}" class="nova-logo me-2">
            <span>{{ theme_config('server_name', site_name()) }}</span>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#novaNavbar"
                aria-controls="novaNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="novaNavbar">
            <ul class="navbar-nav ms-auto gap-1">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}"><i class="bi bi-house me-1"></i>Home</a>
                </li>

                {{-- Pages dynamiques Azuriom --}}
                @foreach(\Azuriom\Models\Page::visible()->orderBy('order')->get() as $navPage)
                <li class="nav-item">
                    <a class="nav-link" href="{{ $navPage->url() }}">{{ $navPage->name }}</a>
                </li>
                @endforeach

                @if(\Azuriom\Plugin\Forum\Models\Category::exists())
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('forum.index') }}"><i class="bi bi-chat-dots me-1"></i>Forum</a>
                </li>
                @endif

                @if(\Azuriom\Plugin\Vote\Models\Server::exists())
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('vote.index') }}"><i class="bi bi-star me-1"></i>Vote</a>
                </li>
                @endif

                @if(\Azuriom\Plugin\Shop\Models\Category::exists())
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('shop.index') }}"><i class="bi bi-cart me-1"></i>Shop</a>
                </li>
                @endif
            </ul>

            <div class="d-flex ms-3 gap-2">
                @guest
                    <a href="{{ route('login') }}" class="btn-nova-outline btn">Login</a>
                    <a href="{{ route('register') }}" class="btn-nova-primary btn">Register</a>
                @else
                    <a href="{{ route('profile.index') }}" class="btn-nova-outline btn">
                        <i class="bi bi-person me-1"></i>{{ Auth::user()->name }}
                    </a>
                    @if(Auth::user()->isAdmin())
                    <a href="{{ route('admin.index') }}" class="btn-nova-primary btn">
                        <i class="bi bi-gear"></i>
                    </a>
                    @endif
                @endguest
            </div>
        </div>
    </div>
</nav>
