<div class="container-fluid">
    <div class="row">
        @foreach ($allProducts as $product)
        <div class="card col-md-4">
            <div class="card-body">
                <img class="productImage" src="/{{ $product->cover_img}}" alt="{{ $product->cover_img }}">
                <h4 class="card-title">{{ $product->name }}</h4>
                <p>{{ $product->description}}</p>
                <p class="price">${{ $product->price}}</p>
                <a href="{{ route('cart.add', $product->id) }}" class="btn btn-outline-warning">Add to Cart</a>
            </div>
        </div>
        @endforeach
    </div>
</div>
