<!DOCTYPE html>
<html>

<head>
    <title>Side Navigation Bar Option Management</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link href="/css/main.css" rel="stylesheet">
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
        <h1>Welcome to Side Navigation Bar Option Management</h1>
        <div class="row">
            @component('layouts.components.adminSideNavBar')
            @endcomponent
            <table class="table table-bordered" style="width:76%">
                <tr>
                    <th>Side Navigation Bar Option Name</th>
                    <th>Side Navigation Bar Option Link</th>
                    <th>Modify</th>
                    <th>Delete</th>
                </tr>
                @foreach($side_navs as $side_nav)
                <tr>
                    <td>{{$side_nav->sideNavName}}</td>
                    <td>{{$side_nav->sideNavLink}}</td>
                    <td><a href="/sideNav/{{ $side_nav->sideNavName }}/edit"><button type="button" class="btn btn-info"
                        data-toggle="modal" data-target="#myModal">Update</button></td> <br>
            <form class="formDeleteButtonAdminPanel" action="/sideNav/{{ $side_nav->sideNavName }}" method="post">
                @csrf
                @method('DELETE')
                <td> <button type="submit" class="btn btn-danger">Delete</button></td>
            </form>
            </td>
        </tr>
        @endforeach
    </table>
    <a class="createButton" href="{{url('createSideNav')}}" class="btn btn-primary"> <button type="button"
            class="btn btn-success" style="height:40px">Add New</button></a>
        </div>
    </div>
</body>

</html>
