<div class="container-fluid">
    <div class="row">
        @foreach ($videos as $video)
        <div class="card h-4">
            <div class="card-body">
                <h4 class="card-title">{{ $video->name }}</h4>
                <p>{{ $video->description}}</p>
                <img class="productImage" src="/{{ $video->cover_img}}" alt="{{ $video->cover_img }}"><br><br>
                <a href="{{ route('cart.add', $video->id) }}" class="btn btn-outline-warning">Add to Cart</a>
            </div>
        </div>
        @endforeach
    </div>
</div>
