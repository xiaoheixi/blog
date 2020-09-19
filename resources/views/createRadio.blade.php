<!DOCTYPE html>
<html>
<head>
<title>Add a Radio Show!</title>
</head>
<body>

<h1>Fill in the form to add a radio show below.</h1>
<form action="/storeRadio" method="post" enctype='multipart/form-data'>
@csrf
  <label for="fileName">File Name:</label><br>
  <input type="text" id="fileName" name="fileName" autocomplete="off" value="{{ old('fileName') }}"><br>
  @error('fileName') <p style="color: red">{{ $message }}</p> @enderror
  <label for="file">File:</label><br>
  <input type="file" id="file" name="file" autocomplete="off" value="{{ old('file') }}"><br>
  @error('file') <p style="color: red">{{ $message }}</p> @enderror
  <input type="submit" value="Submit">
</form>
</body>
</html>