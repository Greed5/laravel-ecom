@extends("layouts.default")
@section("title", "Ecom - Home")
@section("content")
    <main class="container" style="max-width: 900px;">
        <section>
            <div class="row">
                @if(session()->has("success"))
                    <div class="alert alert-success">
                        {{session()->get("success")}}
                    </div>
                @endif
                @if(session("error"))
                    <div class="alert alert-danger">
                        {{session("error")}}
                    </div>
                @endif
                @foreach($products as $product)
                    <div class="col-12 col-md-6 col-lg-3 mb-4">
                        <div class="card p-2 shadow-sm h-100">
                            <img src="{{ $product->image }}" class="card-img-top img-fluid" alt="{{ $product->title }}">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">
                                    <a href="{{ route("products.details", $product->slug) }}" class="text-decoration-none">{{ $product->title }}</a>
                                </h5>
                                <span class="text-success h5">${{ $product->price }}</span>
                                <div >
                                    <a href="{{ route("products.details", $product->slug) }}" class="btn btn-info m-2">View Details</a>
                                    <a href="{{ route("cart.add", $product->id) }}" class="btn btn-success m-2">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div>
                {{ $products->links() }}
            </div>
        </section>
    </main>
@endsection
