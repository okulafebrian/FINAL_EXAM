<x-app title="Cart">
    <x-navbar></x-navbar>
    <div class="container py-5">
        <h3 class="mb-4">My Cart</h3>

        @if ($carts->count() > 0)
            @foreach ($carts as $cart)
                <div class="row mb-3 bcart-bottom gx-4">
                    <div class="col-1">
                        <img src="/storage/assets/{{ $cart->item->photo }}" width="100%">
                    </div>
                    <div class="col-4 m-auto">
                        <div class="fs-5">{{ $cart->item->name }}</div>
                    </div>
                    <div class="col-2 m-auto">
                        <div class="fs-5">${{ $cart->item->price }}</div>
                    </div>
                    <div class="col-2 text-end m-auto">
                        <form method="POST" action="{{ route('carts.destroy', $cart) }}">
                            @csrf
                            <input type="hidden" name="_method" value='DELETE'>

                            <button class="btn btn-danger" type="submit">
                                <i class="bi bi-trash-fill"></i> Delete
                            </button>
                        </form>
                    </div>
                </div>

                <hr>
            @endforeach

            <form method="POST" action="{{ route('orders.store') }}">
                @csrf

                <div class="d-flex align-items-center justify-content-end mt-5">
                    <h4 class="mb-0 me-4">TOTAL: ${{ $cart->sum('price') }}</h4>
                    <button type="submit" class="btn btn-primary btn-lg rounded-3 px-4">
                        Check out
                    </button>
                </div>
            </form>
        @else
            <div class="card bg-light border-0 rounded-3">
                <div class="card-body text-center p-5">
                    <div class="fs-4 text-muted">You don't have items in here</div>
                </div>
            </div>
        @endif
    </div>
</x-app>
