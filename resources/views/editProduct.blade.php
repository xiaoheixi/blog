<!DOCTYPE html>
<html>
<head>
<title>Edit a Product!</title>
</head>
<body>

<h1>Fill in the form to edit a product below.</h1>
<form action="/product/{{ $product->productName }}" method="post" enctype='multipart/form-data'>
@csrf
@method('PATCH')
  <label for="productName">Product Name:</label><br>
  <input type="text" id="productName" name="productName" autocomplete="off" value="{{ $product -> productName }}"><br>
  @error('productName') <p style="color: red">{{ $message }}</p> @enderror
  <label for="productImage">Product Image:</label><br>
  <input type="file" id="productImage" name="productImage" autocomplete="off" value="{{ $product -> productImage }}"><br>
  @error('productImage') <p style="color: red">{{ $message }}</p> @enderror
  <label for="productLink">Product Link:</label><br>
  <input type="text" id="productLink" name="productLink" autocomplete="off" value="{{ $product -> productLink }}"><br>
  @error('productLink') <p style="color: red">{{ $message }}</p> @enderror
  <label for="productPrice">Product Price:</label><br>
  <input type="decimal" id="productPrice" name="productPrice" autocomplete="off" value="{{ $product -> productPrice }}"><br>
  @error('productPrice') <p style="color: red">{{ $message }}</p> @enderror
  <label for="productDescription">Product Description:</label><br>
  <input type="text" id="productDescription" name="productDescription" autocomplete="off" value="{{ $product -> productDescription }}"><br>
  @error('productDescription') <p style="color: red">{{ $message }}</p> @enderror
  <input type="submit" value="Submit">
</form>
</body>
</html>