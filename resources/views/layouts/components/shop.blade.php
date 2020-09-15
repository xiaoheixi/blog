<div class="col-md-8">
    <div class="widget">
        <h3>Products</h3>
        <div class="row">
            <div class="col-md-3">
                <div class="card" style="width:400px">
                    @foreach($product as $products)
                        <img class="card-img-top" src="/images/{{ $products->productImage }}" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">{{$products->productName}}</h4>
                            <p class="card-text">{{$products->productDescription}}</p>
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>