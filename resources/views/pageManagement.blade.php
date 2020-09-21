<!DOCTYPE html>
<html>
<head>
<title>Page Management</title>
</head>
<body>
<link rel="stylesheet" href="{{ asset('css/bootstrap-4.0.0.css') }}">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">


<link rel="stylesheet" href="{{ asset('js/bootstrap-4.0.0.js') }}">
<link rel="stylesheet" href="{{ asset('js/jquery-3.2.1.min.js') }}">
<link rel="stylesheet" href="{{ asset('js/popper.min.js') }}">


<script src="{{ asset('js/bootstrap-4.0.0.js') }}"></script>
<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>





<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="container">


<h1>Welcome to Page Management</h1>
</div>
</nav>
<br>
<div class="button" style="height 100px; width:9%;"><br></br>



<a href="{{url('createPage')}}" class="btn btn-primary">Add Page</a>
</div>
<br></br>
<br></br>
<table >
  <tr>
    <th>Title</th>
    <th>URI</th>
    <th></th>
    <th></th>
  </tr>
@foreach($pages as $page)
<tr>
    <td><a href="/page/{{ $page->URI }}">{{$page->title}}</a></td>
    <td><a href="/page/{{ $page->URI }}">{{$page->URI}}</td>
    <td><a href="/page/{{ $page->URI }}/edit">Modify</a></td>
    <td><form action="/page/{{ $page->URI }}" method="post">
    @csrf
      @method('DELETE')
      <button>Delete</button>
      </form></td>
</tr>
@endforeach
</table>

</body>
    <head>
        <title>Page Management</title>
    </head>
    <body>
        @component('layouts.components.adminSideNavBar')
        @endcomponent
        <h1>Welcome to Page Management</h1>
        <a href="{{url('createPage')}}" class="btn btn-primary">Add Page</a>
        <table style="width:100%">
            <tr>
                <th>Title</th>
                <th>URI</th>
                <th></th>
                <th></th>
            </tr>
            @foreach($pages as $page)
                <tr>
                    <td><a href="/page/{{ $page->URI }}">{{$page->title}}</a></td>
                    <td><a href="/page/{{ $page->URI }}">{{$page->URI}}</td>
                    <td><a href="/page/{{ $page->URI }}/edit">Modify</a></td>
                    <td>
                        <form action="/page/{{ $page->URI }}" method="post">
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
