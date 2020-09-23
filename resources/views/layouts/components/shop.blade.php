<div class="container-fluid">
    <a href="cart" class="btn btn-outline-warning">Go to Cart</a>
    <div class="row">
        @foreach($allProducts as $product)
        <div class="card h-4">
            <div class="card-body">
                <h4 class="card-title">{{$product->name}}</h4>
                <p>{{$product->description}}</p>
                <img class="productImage" src="/{{ $product->cover_img }}" alt="{{ $product->cover_img }}">
                <a href="{{ route('cart.add', $product->id) }}" class="btn btn-outline-warning">Add to Cart</a>
            </div>
        </div>
        @endforeach
    </div>
</div>
