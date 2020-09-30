<div class="container">
    <div class="row">
        @foreach ($videos as $video)
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-10">

                <img class="productImage" src="/{{ $video->cover_img}}" alt="{{ $video->cover_img }}">
                <div class="card-body">
                    <h4 class="{{ $video->name }}"></h4>
                    <h5>${{ $video->price}}</h5>
                    <p class="card-text">{{ $video->description}}</p>
                </div>
                <div class="card-footer text-right">
                    <a href="{{ route('cart.add', $video->id) }}" class="btn btn-outline-warning">Add to Cart</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

