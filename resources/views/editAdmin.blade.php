<!DOCTYPE html>
<html>

<head>
    <title>Edit a Adminstrator!</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
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

    <h1 class="pageTitle">Fill in the form to edit an Administrator below.</h1>
    <form action="/admin/{{ $adminContent->name }}" method="post">
        @csrf
        @method('PATCH')
        <label for="name">Admin Name:</label><br>
        <input type="text" id="name" name="name" autocomplete="off" value="{{ $adminContent->name }}"><br>
        @error('name') <p style="color: red">{{ $message }}</p> @enderror
        <label for="email">Admin Email:</label><br>
        <input type="text" id="email" name="email" autocomplete="off" value="{{ $adminContent->email }}"><br>
        @error('email') <p style="color: red">{{ $message }}</p> @enderror
        <label for="password">Admin Password:</label><br>
        <input type="text" id="password" name="password" autocomplete="off" value="{{ $adminContent->password }}"><br>
        @error('password') <p style="color: red">{{ $message }}</p> @enderror
        <input class="btn btn-outline-warning" type="submit" value="Submit">
    </form>
</body>

</html>
