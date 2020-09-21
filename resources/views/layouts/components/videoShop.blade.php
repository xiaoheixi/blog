<div class="col-md-8">
<a href="checkOut" class="btn btn-primary">Go to Checkout</a>
    <div class="widget">
        <h3>Products</h3>
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    @foreach($videos as $video)
                        <img class="card-img-top" src="/{{ $video->cover_img }}" alt="{{ $video->cover_img }}">
                        <div class="card-body">
                            <h4 class="card-title">{{$video->name}}</h4>
                            <p class="card-text">{{$video->description}}</p>
                            <a href="{{ route('cart.add', $video->id) }}" class="btn btn-primary">Add to Cart</a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
