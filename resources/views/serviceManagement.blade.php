<!DOCTYPE html>
<html>
<head>
<title>Service Management</title>
</head>
<body>

<h1>Welcome to Service Management</h1>
<a href="{{url('createService')}}" class="btn btn-primary">Add Service</a>
<table style="width:100%">
  <tr>
    <th>Name</th>
    <th>Description</th>
    <th>Link</th>
    <th></th>
    <th></th>
  </tr>
@foreach($serviceContent as $service)
<tr>
    <td>{{$service->serviceName}}</td>
    <td>{{$service->serviceDescription}}</td>
    <td>{{$service->serviceLink}}</td>
    <td><a href="/service/{{ $service->serviceName }}/edit">Modify</a></td>
    <td><form action="/service/{{ $service->serviceName }}" method="post">
    @csrf
      @method('DELETE')
      <button>Delete</button>
      </form></td>
</tr>
@endforeach
</table>

</body>
</html>
