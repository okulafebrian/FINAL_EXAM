<x-app title="Amazing E-Grocery">
    <x-navbar></x-navbar>
    <div class="container py-5">
        <div class="row row-cols-5 gx-3 gy-5 mb-5">
            @foreach ($items as $item)
                <div class="col text-center">
                    <img src="/storage/assets/{{ $item->photo }}" width="100" class="mb-2">
                    <h4>{{ $item->name }}</h4>
                    <a href="{{ route('items.show', $item) }}" class="text-decoration-none">Show Detail</a>
                </div>
            @endforeach
        </div>

        <div class="d-flex justify-content-center">
            {{ $items->links() }}
        </div>
    </div>
</x-app>
