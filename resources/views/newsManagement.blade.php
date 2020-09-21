<!DOCTYPE html>
<html>
    <head>
        <title>News Management</title>
    </head>
    <body>
        @component('layouts.components.adminSideNavBar')
        @endcomponent
        <h1>Welcome to News Management</h1>
        <a href="{{url('createNews')}}" class="btn btn-primary">Add News</a>
        <table style="width:100%">
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Link</th>
                <th></th>
                <th></th>
            </tr>
            @foreach($newsContent as $news)
                <tr>
                    <td>{{$news->newsName}}</td>
                    <td>{{$news->newsDescription}}</td>
                    <td>{{$news->newsLink}}</td>
                    <td><a href="/news/{{ $news->newsName }}/edit">Modify</a></td>
                    <td>
                        <form action="/news/{{ $news->newsName }}" method="post">
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
