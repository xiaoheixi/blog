<div class="service-page page">
    @foreach ($serviceContent as $service)
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card h-4">
                        <div class="card-body">
                            <h4 class="card-title">{{ $service->serviceName }}</h4>
                            <p>{{ $service->serviceDescription}}</p>
                            <a href="{{ $service->serviceLink }}" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>