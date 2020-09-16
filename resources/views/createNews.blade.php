<!DOCTYPE html>
<html>
<head>
<title>Add news!</title>
</head>
<body>

<h1>Fill in the form to add a news below.</h1>
<form action="/storeNews" method="post">
@csrf
  <label for="newsName">News Name:</label><br>
  <input type="text" id="newsName" name="newsName" autocomplete="off" value="{{ old('newsName') }}"><br>
  @error('newsName') <p style="color: red">{{ $message }}</p> @enderror
  <label for="newsDescription">News Description:</label><br>
  <input type="text" id="newsDescription" name="newsDescription" autocomplete="off" value="{{ old('newsDescription') }}"><br>
  @error('newsDescription') <p style="color: red">{{ $message }}</p> @enderror
  <label for="newsLink">News Link:</label><br>
  <textarea id="newsLink" name="newsLink" value="{{ old('newsLink') }}"></textarea>
  @error('newsLink') <p style="color: red">{{ $message }}</p> @enderror
  <input type="submit" value="Submit">
</form>
</body>
</html>