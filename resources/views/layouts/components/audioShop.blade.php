<div class="container">
    <div class="row">
        @foreach ($audios as $audio)
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-10">

                <img class="productImage" src="/{{ $audio->cover_img}}" alt="{{ $audio->cover_img }}">
                <div class="card-body">
                    <h4 class="{{ $audio->name }}"></h4>
                    <h5>${{ $audio->price}}</h5>
                    <p class="card-text">{{ $audio->description}}</p>
                </div>
                <div class="card-footer text-right">
                    <a href="{{ route('cart.add', $audio->id) }}" class="btn btn-outline-warning">Add to Cart</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
