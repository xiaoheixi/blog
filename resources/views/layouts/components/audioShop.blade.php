<div class="col-md-8">
<a href="checkOut" class="btn btn-primary">Go to Checkout</a>
    <div class="widget">
        <h3>Products</h3>
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    @foreach($audios as $audio)
                        <img class="card-img-top" src="/{{ $audio->productImage }}" alt="{{ $audio->productImage }}">
                        <div class="card-body">
                            <h4 class="card-title">{{$audio->productName}}</h4>
                            <p class="card-text">{{$audio->productDescription}}</p>
                            <a href="" class="btn btn-primary">Add to Cart</a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>