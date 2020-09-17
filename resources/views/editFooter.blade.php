<!DOCTYPE html>
<html>
<head>
<title>Edit a Footer!</title>
</head>
<body>

<h1>Fill in the form to edit a Footer.</h1>
<form action="/footer/{{ $footerContent->footerName }}" method="post">
@csrf
@method('PATCH')
  <label for="footerName">Footer Name:</label><br>
  <input type="text" id="footerName" name="footerName" autocomplete="off" value="{{ $footerContent -> footerName }}"><br>
  @error('footerName') <p style="color: red">{{ $message }}</p> @enderror
  <label for="footerText">Footer Text:</label><br>
  <input type="text" id="footerText" name="footerText" autocomplete="off" value="{{ $footerContent -> footerText }}"><br>
  @error('footerText') <p style="color: red">{{ $message }}</p> @enderror
  <label for="footerLink">Footer Link:</label><br>
  <input type="text" id="footerLink" name="footerLink" autocomplete="off" value="{{ $footerContent -> footerLink }}"><br>
  @error('footerLink') <p style="color: red">{{ $message }}</p> @enderror
  <input type="submit" value="Submit">
</form>
</body>
</html>