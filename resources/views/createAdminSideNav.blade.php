<!DOCTYPE html>
<html>
<head>
<title>Add an Admin Side Navigation Bar Option!</title>
</head>
<body>

<h1>Fill in the form to add an admin side navigation bar option below.</h1>
<form action="/storeAdminSideNav" method="post">
@csrf
  <label for="adminSideNavName">Admin Side Navigation Bar Option Name:</label><br>
  <input type="text" id="adminSideNavName" name="adminSideNavName" autocomplete="off" value="{{ old('adminSideNavName') }}"><br>
  @error('adminSideNavName') <p style="color: red">{{ $message }}</p> @enderror
  <label for="adminSideNavLink">Admin Side Navigation Bar Option Link:</label><br>
  <input type="text" id="adminSideNavLink" name="adminSideNavLink" autocomplete="off" value="{{ old('adminSideNavLink') }}"><br>
  @error('adminSideNavLink') <p style="color: red">{{ $message }}</p> @enderror
  <input type="submit" value="Submit">
</form>
</body>
</html>
