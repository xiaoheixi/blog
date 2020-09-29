<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzxap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="container-fluid">
        <div class="rowTitle">
            <h1>Welcome to the Admin Dashboard</h1>
        </div>
        <div class="row">
            @component('layouts.components.adminSideNavBar')
            @endcomponent
            <div class="flex-container col-md-8">
                <div class="card-body-admin-dashboard">
                        <h4 class="cardTitleDashboard">Pages</h4>
                        <p class="adminDashboardCount">{{$totalPages}}</p>
                </div>
                <div class="card-body-admin-dashboard">
                    <h4 class="cardTitleDashboard">Products</h4>
                    <p class="adminDashboardCount">{{$totalProducts}}</p>
                </div>
                <div class="card-body-admin-dashboard">
                    <h4 class="cardTitleDashboard">Navigation Bar Options</h4>
                    <p class="adminDashboardCount">{{$totalNavs}}</p>
                </div>
                <div class="card-body-admin-dashboard">
                    <h4 class="cardTitleDashboard">Side Navigation Bar Option</h4>
                    <p class="adminDashboardCount">{{$totalSideNavs}}</p>
                </div>
                <div class="card-body-admin-dashboard">
                    <h4 class="cardTitleDashboard">Services</h4>
                    <p class="adminDashboardCount">{{$totalServices}}</p>
                </div>
                <div class="card-body-admin-dashboard">
                    <h4 class="cardTitleDashboard">News</h4>
                    <p class="adminDashboardCount">{{$totalNews}}</p>
                </div>
                <div class="card-body-admin-dashboard">
                    <h4 class="cardTitleDashboard">Admins</h4>
                    <p class="adminDashboardCount">{{$totalAdmins}}</p>
                </div>
                <div class="card-body-admin-dashboard">
                    <h4 class="cardTitleDashboard">Admin Side Navigation Bar Option</h4>
                    <p class="adminDashboardCount">{{$totalAdminSideNavs}}</p>
                </div>
            </div>
        </div>
    </div>
    </div>

</body>

</html>
