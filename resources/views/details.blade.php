@extends("layouts.default")
@section("title", "Ecom - Home")
@section("content")
    <main class="container" style="max-width: 900px;">
        <section class="text-center mb-4">
            <img src="{{ $product->image }}" class="img-fluid rounded" alt="{{ $product->title }}" style="max-width: 400px; height: auto;">
        </section>
        <section>
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

            <h1 class="display-4 mb-3">{{ $product->title }}</h1>
            <p class="h5 text-success mb-3">${{ $product->price }}</p>
            <p class="lead mb-4">{{ $product->description }}</p>
            <div class="d-flex justify-content-center">
                <a href="{{ route("cart.add", $product->id) }}" class="btn btn-success btn-lg">Add to Cart</a>
            </div>
        </section>
    </main>
@endsection
