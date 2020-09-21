<!DOCTYPE html>
<html>
    <head>
        <title>Edit an Admin Side Navigation Bar Option!</title>
    </head>
    <body>
        <h1>Fill in the form to edit an Admin Side Navigation Bar Option below.</h1>
        <form action="/adminSideNav/{{ $adminSideNavContent->adminSideNavName }}" method="post">
        @csrf
        @method('PATCH')
        <label for="adminSideNavName">Admin Side Navigation Bar Option Name:</label><br>
        <input type="text" id="adminSideNavName" name="adminSideNavName" autocomplete="off" value="{{ $adminSideNavContent -> adminSideNavName }}"><br>
        @error('adminSideNavName') <p style="color: red">{{ $message }}</p> @enderror
        <label for="adminSideNavLink">Admin Side Navigation Bar Option Link:</label><br>
        <input type="text" id="adminSideNavLink" name="adminSideNavLink" autocomplete="off" value="{{ $adminSideNavContent -> adminSideNavLink }}"><br>
        @error('adminSideNavLink') <p style="color: red">{{ $message }}</p> @enderror
        <input type="submit" value="Submit">
    </form>
</body>
</html>
