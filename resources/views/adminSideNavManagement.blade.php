<!DOCTYPE html>
<html>
    <head>
        <title>Admin Side Navigation Bar Option Management</title>
    </head>
    <body>
        @component('layouts.components.adminSideNavBar')
        @endcomponent
        <h1>Welcome to Admin Side Navigation Bar Option Management</h1>
        <a href="{{url('createAdminSideNav')}}" class="btn btn-primary">Add Admin Side Navigation Bar Option</a>
        <table style="width:100%">
            <tr>
                <th>Admin Side Navigation Bar Option Name</th>
                <th>Admin Side Navigation Bar Option Link</th>
                <th></th>
                <th></th>
            </tr>
            @foreach($adminSideNavContent as $adminSideNav)
                <tr>
                    <td>{{$adminSideNav->adminSideNavName}}</td>
                    <td>{{$adminSideNav->adminSideNavLink}}</td>
                    <td><a href="/adminSideNav/{{ $adminSideNav->adminSideNavName }}/edit">Modify</a></td>
                    <td>
                        <form action="/adminSideNav/{{ $adminSideNav->adminSideNavName }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button>Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </body>
</html>
