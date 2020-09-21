<!DOCTYPE html>
<html>
    <head>
        <title>Administrator Management</title>
    </head>
    <body>
        @component('layouts.components.adminSideNavBar')
        @endcomponent
        <h1>Welcome to Administrator Management</h1>
        <a href="{{url('createAdmin')}}" class="btn btn-primary">Add Administrator Detail</a>
        <table style="width:100%">
            <tr>
                <th>Admin Name</th>
                <th>Admin Email</th>
                <th>Admin Password</th>
                <th></th>
                <th></th>
            </tr>
            @foreach($adminContent as $admin)
                <tr>
                    <td>{{$admin->name}}</td>
                    <td>{{$admin->email}}</td>
                    <td>{{$admin->password}}</td>
                    <td><a href="/admin/{{ $admin->name }}/edit">Modify</a></td>
                    <td>
                        <form action="/admin/{{ $admin->name }}" method="post">
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
