<div class="col-md-8">
    <div class="widget">
        <h3>Products</h3>
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    @foreach($videos as $video)
                        <img class="card-img-top" src="/{{ $video->productImage }}" alt="{{ $video->productImage }}">
                        <div class="card-body">
                            <h4 class="card-title">{{$video->productName}}</h4>
                            <p class="card-text">{{$video->productDescription}}</p>
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>