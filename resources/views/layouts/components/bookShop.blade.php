<div class="col-md-8">
<a href="checkOut" class="btn btn-primary">Go to Checkout</a>
    <div class="widget">
        <h3>Products</h3>
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    @foreach($books as $book)
                        <img class="card-img-top" src="/{{ $book->cover_img }}" alt="{{ $book->cover_img }}">
                        <div class="card-body">
                            <h4 class="card-title">{{$book->name}}</h4>
                            <p class="card-text">{{$book->description}}</p>
                            <a href="{{ route('cart.add', $book->id) }}" class="btn btn-primary">Add to Cart</a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
