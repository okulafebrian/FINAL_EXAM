<x-app title="{!! $item->name !!}">
    <x-navbar></x-navbar>
    <div class="container py-5">
        <div class="row g-5">
            <div class="col">
                <img src="/storage/assets/{{ $item->photo }}" width="100%">
            </div>
            <div class="col-9">
                <h1>{{ $item->name }}</h1>
                <h4 class="my-4">${{ $item->price }}</h4>
                <p>{{ $item->description }}</p>

                <form method="POST" action="{{ route('carts.store') }}">
                    @csrf

                    <input type="hidden" name="item_id" value="{{ $item->id }}">
                    <input type="hidden" name="price" value="{{ $item->price }}">

                    <button type="submit" class="btn btn-primary btn-lg rounded-3 px-5">Buy</button>
                </form>
            </div>
        </div>
    </div>
</x-app>
