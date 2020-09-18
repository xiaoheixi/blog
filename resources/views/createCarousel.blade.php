<!DOCTYPE html>
<html>
<head>
<title>Add a Carousel!</title>
</head>
<body>

<h1>Fill in the form to add a carousel below.</h1>
<form action="/storeCarousel" method="post" enctype='multipart/form-data'>
@csrf
  <label for="carouselName">Carousel Name:</label><br>
  <input type="text" id="carouselName" name="carouselName" autocomplete="off" value="{{ old('carouselName') }}"><br>
  @error('carouselName') <p style="color: red">{{ $message }}</p> @enderror
  <label for="carouselImage">Carousel Image:</label><br>
  <input type="file" id="carouselImage" name="carouselImage" autocomplete="off" value="{{ old('carouselImage') }}"><br>
  @error('productImage') <p style="color: red">{{ $message }}</p> @enderror
  <input type="submit" value="Submit">
</form>
</body>
</html>