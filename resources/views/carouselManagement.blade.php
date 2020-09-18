<!DOCTYPE html>
<html>
<head>
<title>Carousel Management</title>
</head>
<body>

<h1>Welcome to Carousel Management</h1>
<a href="{{url('createCarousel')}}" class="btn btn-primary">Add Carousel</a>
<table style="width:100%">
  <tr>
    <th>Name</th>
    <th>Image</th>
    <th></th>
    <th></th>
  </tr>
@foreach($carouselContent as $carousel)
<tr>
    <td>{{$carousel->carouselName}}</a></td>
    <td><img src="{{ $carousel->carouselImage }}" class="img-thumbnail" width="75" />{{$carousel->carouselImage}}</td>
    <td><a href="/carousel/{{ $carousel->carouselName }}/edit">Modify</a></td>
    <td><form action="/carousel/{{ $carousel->carouselName }}" method="post">
    @csrf
      @method('DELETE')
      <button>Delete</button>
      </form></td>
</tr>
@endforeach
</table>

</body>
</html>