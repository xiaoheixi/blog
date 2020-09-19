<div class="col-md-8">
<a href="checkOut" class="btn btn-primary">Go to Checkout</a>
    <div class="widget">
        <h3>Products</h3>
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    @foreach($product as $products)
                        <img class="card-img-top" src="/{{ $products->productImage }}" alt="{{ $products->productImage }}">
                        <div class="card-body">
                            <h4 class="card-title">{{$products->productName}}</h4>
                            <p class="card-text">{{$products->productDescription}}</p>
                            <a href="{{ route('cart.add', $products->productName) }}" class="btn btn-primary">Add to Cart</a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>