<!DOCTYPE html>
<html>
<head>
<title>Page Management</title>
</head>
<body>
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" href="{{ asset('css/bootstrap-4.0.0.css') }}">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="container">


<h1>Welcome to Page Management</h1>
</div>
</nav>
<br>
<div class="button">
  <br></br>
<a href="{{url('createPage')}}" class="btn btn-primary">Add Page</a>
</div>
</div>

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
</html>

<!--
class="navbar navbar-expand-lg navbar-dark bg-dark"
<div class="container">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

!-->