<!DOCTYPE html>
<html>
<head>
<title>Add a Side Navigation Bar Option!</title>
</head>
<body>

<h1>Fill in the form to add a side navigation bar option below.</h1>
<form action="/storeSideNav" method="post">
@csrf
  <label for="sideNavName">Side Navigation Bar Option Name:</label><br>
  <input type="text" id="sideNavName" name="sideNavName" autocomplete="off" value="{{ old('sideNavName') }}"><br>
  @error('sideNavName') <p style="color: red">{{ $message }}</p> @enderror
  <label for="sideNavLink">Side Navigation Bar Option Link:</label><br>
  <input type="text" id="sideNavLink" name="sideNavLink" autocomplete="off" value="{{ old('sideNavLink') }}"><br>
  @error('sideNavLink') <p style="color: red">{{ $message }}</p> @enderror
  <input type="submit" value="Submit">
</form>
</body>
</html>
