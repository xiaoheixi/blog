<div class="news-page page">
    <div class="container-fluid">
        <div class="row">
            @foreach ($newsContent as $news)
            <div class="card col-md-12">
                <div class="card-body">
                    <h4 class="card-title">{{ $news->newsName }}</h4>
                    <p>{{ $news->newsDescription}}</p>
                    <a href="{{ $news->newsLink }}" class="btn btn-outline-warning">Learn More</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
