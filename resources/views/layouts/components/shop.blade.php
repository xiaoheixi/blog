<div class="container text-center">
    <h3>Products</h3>
    <a href="cart" class="btn btn-primary">Go to Cart</a>
    <div class="row">
        @foreach($allProducts as $product)
            <div class="col-4">
                <div class="card">
                    <img class="card-img-top" src="/{{ $product->cover_img }}" alt="{{ $product->cover_img }}">
                    <div class="card-body">
                        <h4 class="card-title">{{$product->name}}</h4>
                        <p class="card-text">{{$product->description}}</p>
                    </div>
                    <div class="card-body">
                            <a href="{{ route('cart.add', $product->id) }}" class="btn btn-primary">Add to Cart</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
