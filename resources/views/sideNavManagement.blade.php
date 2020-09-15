<!DOCTYPE html>
<html>
<head>
<title>Side Navigation Bar Option Management</title>
</head>
<body>

<h1>Welcome to Side Navigation Bar Option Management</h1>
<a href="{{url('createSideNav')}}" class="btn btn-primary">Add Side Navigation Bar Option</a>
<table style="width:100%">
  <tr>
    <th>Side Navigation Bar Option Name</th>
    <th>Side Navigation Bar Option Link</th>
    <th></th>
    <th></th>
  </tr>
@foreach($side_navs as $side_nav)
<tr>
    <td>{{$side_nav->sideNavName}}</td>
    <td>{{$side_nav->sideNavLink}}</td>
    <td><a href="/sideNav/{{ $side_nav->sideNavName }}/edit">Modify</a></td>
    <td><form action="/sideNav/{{ $side_nav->sideNavName }}" method="post">
    @csrf
      @method('DELETE')
      <button>Delete</button>
      </form></td>
</tr>
@endforeach
</table>

</body>
</html>
