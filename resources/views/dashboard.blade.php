<!DOCTYPE html>
<html>
    <head>
        <title>Dashboard</title>
    </head>
    <body>
        <div class="col-md-4">
        @component('layouts.components.adminSideNavBar')
        @endcomponent
        <h1>Welcome to Admin Dashboard</h1>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card h-4">
                        <div class="card-body">
                            <h4 class="card-title">Pages</h4>
                            <p>{{$totalPages}}</p>
                        </div>
                    </div>
                    <div class="card h-4">
                        <div class="card-body">
                            <h4 class="card-title">Products</h4>
                            <p>{{$totalProducts}}</p>
                        </div>
                    </div>
                    <div class="card h-4">
                        <div class="card-body">
                            <h4 class="card-title">Navigation Bar Options</h4>
                            <p>{{$totalNavs}}</p>
                        </div>
                    </div>
                    <div class="card h-4">
                        <div class="card-body">
                            <h4 class="card-title">Side Navigation Bar Options</h4>
                            <p>{{$totalSideNavs}}</p>
                        </div>
                    </div>
                    <div class="card h-4">
                        <div class="card-body">
                            <h4 class="card-title">Services</h4>
                            <p>{{$totalServices}}</p>
                        </div>
                    </div>
                    <div class="card h-4">
                        <div class="card-body">
                            <h4 class="card-title">News</h4>
                            <p>{{$totalNews}}</p>
                        </div>
                    </div>
                    <div class="card h-4">
                        <div class="card-body">
                            <h4 class="card-title">Admins</h4>
                            <p>{{$totalAdmins}}</p>
                        </div>
                    </div>
                    <div class="card h-4">
                        <div class="card-body">
                            <h4 class="card-title">Admin Side Navigation Bar Option</h4>
                            <p>{{$totalAdminSideNavs}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </div>

    </body>
</html>
