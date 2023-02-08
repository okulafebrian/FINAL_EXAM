<nav class="navbar navbar-expand-lg shadow-sm">
    <div class="container-lg">
        <a class="navbar-brand" href="{{ route('home') }}">Amazing E-Grocery</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Cart</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Profile</a>
                </li>
                @if (auth()->user()->role->id == 1)
                    <li class="nav-item">
                        <a class="nav-link">Account Maintenance</a>
                    </li>
                @endif
            </ul>
        </div>
        <div class="d-flex gap-3">
            <a href="{{ route('logout') }}" type="button" class="btn btn-primary"
                onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </div>
</nav>
