<!DOCTYPE html>
<html>

<head>
    <title>Admin Side Navigation Bar Option Management</title>
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
        <h1>Welcome to Admin Side Navigation Bar Option Management</h1>
        <div class="row">
            @component('layouts.components.adminSideNavBar')
            @endcomponent
            <table class="table table-bordered" style="width:62%">
                <tr>
                    <th>Admin Side Navigation Bar Option Name</th>
                    <th>Admin Side Navigation Bar Option Link</th>
                    <th>Modify</th>
                    <th>Delete</th>
                </tr>
                @foreach($adminSideNavContent as $adminSideNav)
                <tr>
                    <td>{{$adminSideNav->adminSideNavName}}</td>
                    <td>{{$adminSideNav->adminSideNavLink}}</td>
                    <td><a href="/adminSideNav/{{ $adminSideNav->adminSideNavName }}/edit"><button
                                class="modifyButton">Modify</button></a></td>
                    <td>
                        <form action="/adminSideNav/{{ $adminSideNav->adminSideNavName }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="deleteButton">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
            <a class="createButton" href="{{url('createAdminSideNav')}}" class="btn btn-primary"><button
                    class="createButton">Add Admin Side Navigation Bar Option</button></a>
        </div>
    </div>
</body>

</html>