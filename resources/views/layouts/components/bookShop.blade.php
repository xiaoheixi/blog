<div class="container-fluid">
    <div class="row">
        @foreach ($books as $book)
        <div class="card h-4 col-md-4">
            <div class="card-body">
                <img class="productImage" src="/{{ $book->cover_img}}" alt="{{ $book->cover_img }}">
                <h4 class="card-title">{{ $book->name }}</h4>
                <p>{{ $book->description}}</p>
                <p>${{ $book->price}}</p>
                <a href="{{ route('cart.add', $book->id) }}" class="btn btn-outline-warning">Add to Cart</a>
            </div>
        </div>
        @endforeach
    </div>
</div>
