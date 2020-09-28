<div class="container-fluid">
    <div class="row">
        @foreach ($videos as $video)
        <div class="card h-4 col-md-4">
            <div class="card-body">
                <img class="productImage" src="/{{ $video->cover_img}}" alt="{{ $video->cover_img }}"><br><br>
                <h4 class="card-title">{{ $video->name }}</h4>
                <p>{{ $video->description}}</p>
                <p>${{ $video->price}}</p>
                <a href="{{ route('cart.add', $video->id) }}" class="btn btn-outline-warning">Add to Cart</a>
            </div>
        </div>
        @endforeach
    </div>
</div>
