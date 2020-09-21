<!DOCTYPE html>
<html>
    <head>
        <title>Footer Management</title>
    </head>
    <body>
        @component('layouts.components.adminSideNavBar')
        @endcomponent
        <h1>Welcome to Footer Management</h1>
        <a href="{{url('createFooter')}}" class="btn btn-primary">Add Footer</a>
        <table style="width:100%">
            <tr>
                <th>Footer Name</th>
                <th>Footer Text</th>
                <th>Footer Link</th>
                <th></th>
                <th></th>
            </tr>
            @foreach($footerContent as $footer)
                <tr>
                    <td>{{$footer->footerName}}</td>
                    <td>{{$footer->footerText}}</td>
                    <td>{{$footer->footerLink}}</td>
                    <td><a href="/footer/{{ $footer->footerName }}/edit">Modify</a></td>
                    <td>
                        <form action="/footer/{{ $footer->footerName }}" method="post">
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
