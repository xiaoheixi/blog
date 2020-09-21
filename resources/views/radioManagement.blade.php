<!DOCTYPE html>
<html>
    <head>
        <title>Radio Show Management</title>
    </head>
    <body>
        @component('layouts.components.adminSideNavBar')
        @endcomponent
        <h1>Welcome to Radio Show Management</h1>
        <a href="{{url('createRadio')}}" class="btn btn-primary">Add Radio Show</a>
        <table style="width:100%">
            <tr>
                <th>Name</th>
                <th>File</th>
                <th></th>
                <th></th>
            </tr>
            @foreach($radioContent as $radio)
                <tr>
                    <td>{{$radio->fileName}}</td>
                    <td>
                        <audio controls>
                            <source src="/{{$radio->file}}" type="audio/mp3">
                            Your browser does not support the audio element.
                        </audio>
                    </td>
                    <td><a href="/radio/{{ $radio->fileName }}/edit">Modify</a></td>
                    <td>
                        <form action="/radio/{{ $radio->fileName }}" method="post">
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
