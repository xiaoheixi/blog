<!DOCTYPE html>
<html>

<head>
    <title>Add a Product!</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzxap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
</head>

<body>

    <h1 class="pageTitle">Fill in the form to add a product below.</h1>
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
        <input class="fileInput" type="file" id="cover_img" name="cover_img" autocomplete="off" value="{{ old('cover_img') }}"><br>
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
        <input class="btn btn-outline-warning" type="submit" value="Submit">
    </form>
</body>

</html>
