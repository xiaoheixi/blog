<!DOCTYPE html>
<html>
    <head>
        <title>Navigation Bar Option Management</title>
    </head>
    <body>
        @component('layouts.components.adminSideNavBar')
        @endcomponent
        <h1>Welcome to Navigation Bar Option Management</h1>
        <a href="{{url('createNav')}}" class="btn btn-primary">Add Navigation Bar Option</a>
        <table style="width:100%">
            <tr>
                <th>Navigation Bar Option Name</th>
                <th>Navigation Bar Option Link</th>
                <th></th>
                <th></th>
            </tr>
            @foreach($navs as $nav)
                <tr>
                    <td>{{$nav->navName}}</td>
                    <td>{{$nav->navLink}}</td>
                    <td><a href="/nav/{{ $nav->navName }}/edit">Modify</a></td>
                    <td>
                        <form action="/nav/{{ $nav->navName }}" method="post">
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
