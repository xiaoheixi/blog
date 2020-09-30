</div>
<div class="container">

    <div class="row">
        @foreach ($serviceContent as $service)

        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-10">
                <div class="card-body">
                    <h4 class=" {{ $service->serviceName }}">

                    </h4>

                    <p class="card-text">{{ $service->serviceDescription}}</p>

                </div>
                <div class="card-footer text-right">
                    <a href="{{ $service->serviceLink }}" class="btn btn-outline-warning">Learn More</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
