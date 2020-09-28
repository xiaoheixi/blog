<div class="container-fluid">
    <div class="row">
        @foreach ($audios as $audio)
        <div class="card h-4 col-md-4">
            <div class="card-body">
                <img class="productImage" src="/{{ $audio->cover_img}}" alt="{{ $audio->cover_img }}"><br><br>
                <h4 class="card-title">{{ $audio->name }}</h4>
                <p>{{ $audio->description}}</p>
                <p>${{ $audio->price}}</p>
                <a href="{{ route('cart.add', $audio->id) }}" class="btn btn-outline-warning">Add to Cart</a>
            </div>
        </div>
        @endforeach
    </div>
</div>
