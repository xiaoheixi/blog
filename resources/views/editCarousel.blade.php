<!DOCTYPE html>
<html>
<head>
<title>Edit a Carousel!</title>
</head>
<body>

<h1>Fill in the form to edit a carousel below.</h1>
<form action="/carousel/{{ $carouselContent->carouselName }}" method="post" enctype='multipart/form-data'>
@csrf
@method('PATCH')
  <label for="carouselName">Carousel Name:</label><br>
  <input type="text" id="carouselName" name="carouselName" autocomplete="off" value="{{ $carouselContent -> carouselName }}"><br>
  @error('carouselName') <p style="color: red">{{ $message }}</p> @enderror
  <label for="carouselImage">Carousel Image:</label><br>
  <input type="file" id="carouselImage" name="carouselImage" autocomplete="off" value="{{ $carouselContent -> carouselImage }}"><br>
  @error('carouselImage') <p style="color: red">{{ $message }}</p> @enderror
  <input type="submit" value="Submit">
</form>
</body>
</html>