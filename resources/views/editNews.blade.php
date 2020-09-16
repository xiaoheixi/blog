<!DOCTYPE html>
<html>
<head>
<title>Edit a News!</title>
</head>
<body>

<h1>Fill in the form to edit a news below.</h1>
<form action="/news/{{ $newsContent->newsName }}" method="post">
@csrf
@method('PATCH')
  <label for="newsName">News Name:</label><br>
  <input type="text" id="newsName" name="newsName" autocomplete="off" value="{{ $newsContent -> newsName }}"><br>
  @error('newsName') <p style="color: red">{{ $message }}</p> @enderror
  <label for="newsDescription">News Description:</label><br>
  <input type="text" id="newsDescription" name="newsDescription" autocomplete="off" value="{{ $newsContent -> newsDescription }}"><br>
  @error('newsDescription') <p style="color: red">{{ $message }}</p> @enderror
  <label for="newsLink">News Link:</label><br>
  <input type="text" id="newsLink" name="newsLink" autocomplete="off" value="{{ $newsContent -> newsLink }}"><br>
  @error('newsLink') <p style="color: red">{{ $message }}</p> @enderror
  <input type="submit" value="Submit">
</form>
</body>
</html>