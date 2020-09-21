<div class="col-md-8">
<a href="checkOut" class="btn btn-primary">Go to Checkout</a>
    <div class="widget">
        <h3>Products</h3>
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    @foreach($audios as $audio)
                        <img class="card-img-top" src="/{{ $audio->cover_img }}" alt="{{ $audio->cover_img }}">
                        <div class="card-body">
                            <h4 class="card-title">{{$audio->name}}</h4>
                            <p class="card-text">{{$audio->description}}</p>
                            <a href="{{ route('cart.add', $audio->id) }}" class="btn btn-primary">Add to Cart</a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
