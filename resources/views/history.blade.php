@extends("layouts.default")
@section("title", "Ecom - Order History")
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
                @foreach($orders as $order)
                    <div class="col-12 mb-3">
                        <div class="card shadow-sm">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="{{ $order->product_details[0]['image'] }}"
                                         class="img-fluid rounded-start"
                                         alt="Product Image">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body d-flex flex-column">
                                        <h5 class="card-title">Order #{{ $order->id }}</h5>
                                        <p class="card-text"><strong>Payment ID:</strong> {{ $order->payment_id }}</p>
                                        <p class="card-text"><strong>Total Price:</strong> ${{ $order->total_price }}</p>
                                        <h6 class="mt-2">Products:</h6>
                                        <ul class="list-unstyled">
                                            @foreach ($order->product_details as $product)
                                                <li class="border-bottom py-2">
                                                    <a href="{{ route('products.details', $product['slug']) }}" class="text-decoration-none">{{ $product['name'] }}</a>
                                                    - <strong>Quantity:</strong> {{ $product['quantity'] }}
                                                    - <strong>Price:</strong> ${{ $product['price'] }}
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="d-flex justify-content-center">
                {{ $orders->links() }}
            </div>
        </section>
    </main>
@endsection
