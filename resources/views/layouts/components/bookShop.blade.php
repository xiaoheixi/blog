<div class="container">
    <div class="row">
        @foreach ($books as $book)
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-10">

                <img class="productImage" src="/{{ $book->cover_img}}" alt="{{ $book->cover_img }}">
                <div class="card-body">
                    <h4 class="{{ $book->name }}"></h4>
                    <h5>${{ $book->price}}</h5>
                    <p class="card-text">{{ $book->description}}</p>
                </div>
                <div class="card-footer text-right">
                    <a href="{{ route('cart.add', $book->id) }}" class="btn btn-outline-warning">Add to Cart</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>