@extends("layouts.default")
@section("title", "Ecom - Home")
@section("content")
    <main class="container" style="max-width: 900px;">
        <section>
            <div class="row mb-3">
                @if(session()->has("success"))
                    <div class="alert alert-success">
                        {{ session()->get("success") }}
                    </div>
                @endif
                @if(session("error"))
                    <div class="alert alert-danger">
                        {{ session("error") }}
                    </div>
                @endif
            </div>
            <div class="row">
                @foreach($cartItems as $cart)
                    <div class="col-12 mb-3">
                        <div class="card shadow-sm">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="{{ $cart->image }}" class="img-fluid rounded-start" alt="{{ $cart->title }}">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body d-flex flex-column justify-content-between">
                                        <div>
                                            <h5 class="card-title"><a href="{{ route("products.details", $cart->slug) }}" class="text-decoration-none">{{ $cart->title }}</a></h5>
                                            <p class="card-text">Price: <strong>${{ $cart->price }}</strong> | Quantity: <strong>{{ $cart->quantity }}</strong></p>
                                        </div>
                                        <div class="mt-2">
                                            <a href="{{ route("cart.delete", $cart->cart_id) }}" class="btn btn-danger btn-sm">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="d-flex justify-content-between">
                <div>
                    {{ $cartItems->links() }}
                </div>
                <div>
                    <a class="btn btn-success" href="{{ route('checkout.show') }}">Checkout</a>
                </div>
            </div>
        </section>
    </main>
@endsection
