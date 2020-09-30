<div class="container">

    <div class="row justify-content-center">
        @foreach ($newsContent as $news)

        <div class="col-md-12">
            <div class="card h-10">
                <div class="card-body">
                    <h4 class=" {{ $news->newsName }}">

                    </h4>

                    <p class="card-text">{{ $news->newsDescription}}</p>

                </div>
                <div class="card-footer text-right">
                    <a href="{{ $news->newsLink }}" class="btn btn-outline-warning">Learn More</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
