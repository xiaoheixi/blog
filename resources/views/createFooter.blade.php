<!DOCTYPE html>
<html>
<head>
<title>Add a Footer!</title>
</head>
<body>

<h1>Fill in the form to add a footer below.</h1>
<form action="/storeFooter" method="post">
@csrf
  <label for="footerName">Footer Name:</label><br>
  <input type="text" id="footerName" name="footerName" autocomplete="off" value="{{ old('footerName') }}"><br>
  @error('footerName') <p style="color: red">{{ $message }}</p> @enderror
  <label for="footerText">Footer Text:</label><br>
  <input type="text" id="footerText" name="footerText" autocomplete="off" value="{{ old('footerText') }}"><br>
  @error('footerText') <p style="color: red">{{ $message }}</p> @enderror
  <label for="footerLink">Footer Link:</label><br>
  <input type="text" id="footerLink" name="footerLink" autocomplete="off" value="{{ old('footerLink') }}"><br>
  @error('footerLink') <p style="color: red">{{ $message }}</p> @enderror
  <input type="submit" value="Submit">
</form>
</body>
</html>