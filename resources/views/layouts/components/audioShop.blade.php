<div class="container-fluid">
    <div class="row">
        @foreach ($audios as $audio)
        <div class="card h-4">
            <div class="card-body">
                <h4 class="card-title">{{ $audio->name }}</h4>
                <p>{{ $audio->description}}</p>
                <img class="productImage" src="/{{ $audio->cover_img}}" alt="{{ $audio->cover_img }}"><br><br>
                <a href="{{ route('cart.add', $audio->id) }}" class="btn btn-outline-warning">Add to Cart</a>
            </div>
        </div>
        @endforeach
    </div>
</div>
