<!DOCTYPE html>
<html>
<head>
<title>Add a Administrator!</title>
</head>
<body>

<h1>Fill in the form to add an Administrator below.</h1>
<form action="/storeAdmin" method="post">
@csrf
  <label for="name">Admin Name:</label><br>
  <input type="text" id="name" name="name" autocomplete="off" value="{{ old('name') }}"><br>
  @error('name') <p style="color: red">{{ $message }}</p> @enderror
  <label for="email">Admin Email:</label><br>
  <input type="text" id="email" name="email" autocomplete="off" value="{{ old('email') }}"><br>
  @error('email') <p style="color: red">{{ $message }}</p> @enderror
  <label for="password">Admin Password:</label><br>
  <input type="text" id="password" name="password" autocomplete="off" value="{{ old('password') }}"><br>
  @error('password') <p style="color: red">{{ $message }}</p> @enderror
  <input type="submit" value="Submit">
</form>
</body>
</html>