<div class="col-md-8">
    <div class="widget">
        <h3>Products</h3>
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    @foreach($books as $book)
                        <img class="card-img-top" src="/{{ $book->productImage }}" alt="{{ $book->productImage }}">
                        <div class="card-body">
                            <h4 class="card-title">{{$book->productName}}</h4>
                            <p class="card-text">{{$book->productDescription}}</p>
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>