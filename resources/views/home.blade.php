<x-app title="Amazing E-Grocery">
    <x-navbar></x-navbar>
    <div class="container py-5">
        <div class="row row-cols-5">
            @foreach ($items as $item)
                <div class="col">
                    <img src="/storage/assets/{{ $item->photo }}" width="100">
                    <h3>{{ $item->name }}</h3>
                    <a href="{{ route('items.show', $item) }}">Detail</a>
                </div>
            @endforeach
        </div>

        <div class="d-flex justify-content-end">
            {{ $items->links() }}
        </div>
    </div>
</x-app>
