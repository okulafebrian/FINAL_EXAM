<nav class="navbar navbar-expand-lg shadow-sm bg-light py-3">
    <div class="container-lg">
        <a class="navbar-brand text-primary fw-bold" href="{{ route('home') }}">Amazing E-Grocery</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('carts') ? 'active' : '' }}"
                        href="{{ route('carts.index') }}">Cart</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('users/*') ? 'active' : '' }}"
                        href="{{ route('users.show', auth()->user()) }}">Profile</a>
                </li>
                @if (auth()->user()->role->id == 1)
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('users') ? 'active' : '' }}"
                            href="{{ route('users.index') }}">Account Maintenance</a>
                    </li>
                @endif
            </ul>
        </div>
        <div class="d-flex gap-3">
            <a href="{{ route('logout') }}" type="button" class="btn btn-outline-primary"
                onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </div>
</nav>
