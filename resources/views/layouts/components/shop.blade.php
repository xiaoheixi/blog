<div class="container">

    <div class="row">
        @foreach ($allProducts as $product)

        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-10">
                <img src="/{{ $product->cover_img}}" alt="{{ $product->cover_img }}">
                <div class="card-body">
                    <h4 class="{{ $product->name }}">

                    </h4>
                    <h5>${{ $product->price}}</h5>
                    <p class="card-text">{{ $product->description}}</p>

                </div>
                <div class="card-footer text-right">
                    <a href="{{ route('cart.add', $product->id) }}" class="btn btn-outline-warning">Add to Cart</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
