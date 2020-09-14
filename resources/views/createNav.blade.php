<!DOCTYPE html>
<html>
<head>
<title>Add a Navigation Bar Option!</title>
</head>
<body>

<h1>Fill in the form to add a navigation bar option below.</h1>
<form action="/storeNav" method="post">
@csrf
  <label for="navName">Navigation Bar Option Name:</label><br>
  <input type="text" id="navName" name="navName" autocomplete="off" value="{{ old('navName') }}"><br>
  @error('navName') <p style="color: red">{{ $message }}</p> @enderror
  <label for="navLink">Navigation Bar Option Link:</label><br>
  <input type="text" id="navLink" name="navLink" autocomplete="off" value="{{ old('navLink') }}"><br>
  @error('navLink') <p style="color: red">{{ $message }}</p> @enderror
  <input type="submit" value="Submit">
</form>
</body>
</html>