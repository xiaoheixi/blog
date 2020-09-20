<!DOCTYPE html>
<html>
<head>
<title>Add a Product!</title>
</head>
<body>

<h1>Fill in the form to add a product below.</h1>
<form action="/storeProduct" method="post" enctype='multipart/form-data'>
@csrf
  <label for="name">Product Name:</label><br>
  <input type="text" id="name" name="name" autocomplete="off" value="{{ old('name') }}"><br>
  @error('name') <p style="color: red">{{ $message }}</p> @enderror
  <label for="description">Product Description:</label><br>
  <input type="text" id="description" name="description" autocomplete="off" value="{{ old('description') }}"><br>
  @error('description') <p style="color: red">{{ $message }}</p> @enderror
  <label for="price">Product Price:</label><br>
  <input type="decimal" id="price" name="price" autocomplete="off" value="{{ old('price') }}"><br>
  @error('price') <p style="color: red">{{ $message }}</p> @enderror
  <label for="cover_img">Product Image:</label><br>
  <input type="file" id="cover_img" name="cover_img" autocomplete="off" value="{{ old('cover_img') }}"><br>
  @error('cover_img') <p style="color: red">{{ $message }}</p> @enderror
  <input type="radio" id="Audio" name="type" value="Audio">
  <label for="Audio">Audio</label><br>
  <input type="radio" id="Book" name="type" value="Book">
  <label for="Book">Book</label><br>
  <input type="radio" id="Video" name="type" value="Video">
  <label for="Video">Video</label><br>
  @error('type') <p style="color: red">{{ $message }}</p> @enderror
  <label for="productLink">Product Link:</label><br>
  <input type="text" id="productLink" name="productLink" autocomplete="off" value="{{ old('productLink') }}"><br>
  @error('productLink') <p style="color: red">{{ $message }}</p> @enderror
  <input type="submit" value="Submit">
</form>
</body>
</html>
