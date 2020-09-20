<!DOCTYPE html>
<html>
<head>
<title>Edit a Product!</title>
</head>
<body>

<h1>Fill in the form to edit a product below.</h1>
<form action="/product/{{ $productContent->name }}" method="post" enctype='multipart/form-data'>
@csrf
@method('PATCH')
<label for="name">Product Name:</label><br>
<input type="text" id="name" name="name" autocomplete="off" value="{{ $productContent -> name }}"><br>
@error('name') <p style="color: red">{{ $message }}</p> @enderror
<label for="description">Product Description:</label><br>
<input type="text" id="description" name="description" autocomplete="off" value="{{ $productContent -> description }}"><br>
@error('description') <p style="color: red">{{ $message }}</p> @enderror
<label for="price">Product Price:</label><br>
  <input type="decimal" id="price" name="price" autocomplete="off" value="{{ $productContent -> price }}"><br>
  @error('price') <p style="color: red">{{ $message }}</p> @enderror
<label for="cover_img">Product Image:</label><br>
<input type="file" id="cover_img" name="cover_img" autocomplete="off" value="{{ $productContent -> cover_img }}"><br>
@error('cover_img') <p style="color: red">{{ $message }}</p> @enderror
<input type="radio" id="Audio" name="type" value="Audio">
<label for="Audio">Audio</label><br>
<input type="radio" id="Book" name="type" value="Book">
<label for="Book">Book</label><br>
<input type="radio" id="Video" name="type" value="Video">
<label for="Video">Video</label><br>
@error('type') <p style="color: red">{{ $message }}</p> @enderror
<label for="productLink">Product Link:</label><br>
<input type="text" id="productLink" name="productLink" autocomplete="off" value="{{ $productContent -> productLink }}"><br>
@error('productLink') <p style="color: red">{{ $message }}</p> @enderror
  <input type="submit" value="Submit">
</form>
</body>
</html>
