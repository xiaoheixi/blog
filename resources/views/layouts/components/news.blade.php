<div class="news-page page">
    @foreach ($newsContent as $news)
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card h-4">
                        <div class="card-body">
                            <h4 class="card-title">{{ $news->newsName }}</h4>
                            <p>{{ $news->newsDescription}}</p>
                            <a href="{{ $news->newsLink }}" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>