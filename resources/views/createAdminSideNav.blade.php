<!DOCTYPE html>
<html>

<head>
    <title>Add an Admin Side Navigation Bar Option!</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link href="/css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzxap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
</head>

<body>

    <h1 class="pageTitle">Fill in the form to add an admin side navigation bar option below.</h1>
    <form action="/storeAdminSideNav" method="post">
        @csrf
        <label for="adminSideNavName">Admin Side Navigation Bar Option Name:</label><br>
        <input type="text" id="adminSideNavName" name="adminSideNavName" autocomplete="off"
            value="{{ old('adminSideNavName') }}"><br>
        @error('adminSideNavName') <p style="color: red">{{ $message }}</p> @enderror
        <label for="adminSideNavLink">Admin Side Navigation Bar Option Link:</label><br>
        <input type="text" id="adminSideNavLink" name="adminSideNavLink" autocomplete="off"
            value="{{ old('adminSideNavLink') }}"><br>
        @error('adminSideNavLink') <p style="color: red">{{ $message }}</p> @enderror
        <input class="btn btn-outline-warning" type="submit" value="Submit">
    </form>
</body>

</html>
