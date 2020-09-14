<!DOCTYPE html>
<html>
<head>
<title>Edit a Navigation Bar Option!</title>
</head>
<body>

<h1>Fill in the form to edit a Navigation Bar Option below.</h1>
<form action="/nav/{{ $navContent->navName }}" method="post">
@csrf
@method('PATCH')
  <label for="navName">Navigation Bar Option Name:</label><br>
  <input type="text" id="navName" name="navName" autocomplete="off" value="{{ $navContent -> navName }}"><br>
  @error('navName') <p style="color: red">{{ $message }}</p> @enderror
  <label for="navLink">Navigation Bar Option Link:</label><br>
  <input type="text" id="navLink" name="navLink" autocomplete="off" value="{{ $navContent -> navLink }}"><br>
  @error('navLink') <p style="color: red">{{ $message }}</p> @enderror
  <input type="submit" value="Submit">
</form>
</body>
</html>