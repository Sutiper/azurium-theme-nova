<nav class="navbar navbar-expand-lg nova-navbar sticky-top">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center gap-2" href="{{ url('/') }}">
            <img src="{{ theme_asset('img/logo.png') }}" alt="{{ site_name() }}" height="36" onerror="this.style.display='none'">
            <span class="fw-bold">{{ site_name() }}</span>
        </a>

        <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse"
                data-bs-target="#novaNavbar"
                aria-controls="novaNavbar"
                aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="novaNavbar">
            <ul class="navbar-nav ms-auto gap-1">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ url('/') }}">
                        <i class="bi bi-house me-1"></i>Home
                    </a>
                </li>

                @foreach(\Azuriom\Models\NavbarElement::all() as $navElement)
                    @if($navElement->children->isNotEmpty())
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                                {{ $navElement->name }}
                            </a>
                            <ul class="dropdown-menu">
                                @foreach($navElement->children as $child)
                                    <li>
                                        <a class="dropdown-item" href="{{ $child->link() }}"
                                           @if($child->isExternal()) target="_blank" rel="noopener noreferrer" @endif>
                                            {{ $child->name }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ $navElement->link() }}"
                               @if($navElement->isExternal()) target="_blank" rel="noopener noreferrer" @endif>
                                {{ $navElement->name }}
                            </a>
                        </li>
                    @endif
                @endforeach
            </ul>

            <div class="d-flex ms-3 gap-2">
                @guest
                    <a href="{{ route('login') }}" class="btn-nova-outline btn">Login</a>
                    <a href="{{ route('register') }}" class="btn-nova-primary btn">Register</a>
                @else
                    <a href="{{ route('profile.index') }}" class="btn-nova-outline btn">
                        {{ auth()->user()->name }}
                    </a>
                    @if(auth()->user()->isAdmin())
                        <a href="{{ route('admin.dashboard') }}" class="btn-nova-primary btn">Admin</a>
                    @endif
                @endguest
            </div>
        </div>
    </div>
</nav>
