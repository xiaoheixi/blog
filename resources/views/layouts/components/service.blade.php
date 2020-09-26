<div class="container-fluid">
    <div class="row">
        @foreach ($serviceContent as $service)
        <div class="card h-4 col-md-4">
            <div class="card-body">
                <h4 class="card-title">{{ $service->serviceName }}</h4>
                <p>{{ $service->serviceDescription}}</p>
                <a href="{{ $service->serviceLink }}" class="btn btn-outline-warning">Learn More</a>
            </div>
        </div>
        @endforeach
    </div>

</div>
