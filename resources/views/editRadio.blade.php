<!DOCTYPE html>
<html>
<head>
<title>Edit a Radio Show!</title>
</head>
<body>

<h1>Fill in the form to edit a radio show below.</h1>
<form action="/radio/{{ $radioContent->fileName }}" method="post" enctype='multipart/form-data'>
@csrf
@method('PATCH')
  <label for="fileName">File Name:</label><br>
  <input type="text" id="fileName" name="fileName" autocomplete="off" value="{{ $radioContent -> fileName }}"><br>
  @error('fileName') <p style="color: red">{{ $message }}</p> @enderror
  <label for="file">File:</label><br>
  <input type="file" id="file" name="file" autocomplete="off" value="{{ $radioContent -> file }}"><br>
  @error('file') <p style="color: red">{{ $message }}</p> @enderror
  <input type="submit" value="Submit">
</form>
</body>
</html>