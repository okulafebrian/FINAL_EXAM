<x-app title="Amazing E-Grocery">
    <div class="container p-5 text-center">
        <img src="/storage/assets/shop.webp" width="25%">
        <h1>Welcome to Amazing E-Grocery</h1>
        <p class="text-muted">Find and buy your grocery here!</p>

        <div class="d-flex gap-3 justify-content-center mt-4">
            <a href="{{ route('register') }}" class="btn btn-primary btn-lg rounded-3">Register</a>
            <a href="{{ route('login') }}" class="btn btn-primary btn-lg rounded-3">Login</a>
        </div>
    </div>

    <x-footer></x-footer>
</x-app>
