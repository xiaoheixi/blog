<!DOCTYPE html>
<html>
<head>
<title>Edit a Side Navigation Bar Option!</title>
</head>
<body>

<h1>Fill in the form to edit a Side Navigation Bar Option below.</h1>
<form action="/sideNav/{{ $sideNavContent->sideNavName }}" method="post">
@csrf
@method('PATCH')
  <label for="sideNavName">Side Navigation Bar Option Name:</label><br>
  <input type="text" id="sideNavName" name="sideNavName" autocomplete="off" value="{{ $sideNavContent -> sideNavName }}"><br>
  @error('sideNavName') <p style="color: red">{{ $message }}</p> @enderror
  <label for="sideNavLink">Side Navigation Bar Option Link:</label><br>
  <input type="text" id="sideNavLink" name="sideNavLink" autocomplete="off" value="{{ $sideNavContent -> sideNavLink }}"><br>
  @error('sideNavLink') <p style="color: red">{{ $message }}</p> @enderror
  <input type="submit" value="Submit">
</form>
</body>
</html>
