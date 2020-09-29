<!DOCTYPE html>
<html>

<head>
    <title>Edit a Footer!</title>
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

    <h1 class="pageTitle">Fill in the form to edit a Footer.</h1>
    <form action="/footer/{{ $footerContent->footerName }}" method="post">
        @csrf
        @method('PATCH')
        <label for="footerName">Footer Name:</label><br>
        <input type="text" id="footerName" name="footerName" autocomplete="off"
            value="{{ $footerContent -> footerName }}"><br>
        @error('footerName') <p style="color: red">{{ $message }}</p> @enderror
        <label for="footerText">Footer Text:</label><br>
        <input type="text" id="footerText" name="footerText" autocomplete="off"
            value="{{ $footerContent -> footerText }}"><br>
        @error('footerText') <p style="color: red">{{ $message }}</p> @enderror
        <label for="footerLink">Footer Link:</label><br>
        <input type="text" id="footerLink" name="footerLink" autocomplete="off"
            value="{{ $footerContent -> footerLink }}"><br>
        @error('footerLink') <p style="color: red">{{ $message }}</p> @enderror
        <input class="btn btn-outline-warning" type="submit" value="Submit">
    </form>
</body>

</html>
