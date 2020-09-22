<!DOCTYPE html>
<html>

<head>
    <title>Add a Contact Detail!</title>
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

    <h1 class="pageTitle">Fill in the form to add a contact detail below.</h1>
    <form action="/storeContact" method="post">
        @csrf
        <label for="contactName">Contact Name:</label><br>
        <input type="text" id="contactName" name="contactName" autocomplete="off" value="{{ old('contactName') }}"><br>
        @error('contactName') <p style="color: red">{{ $message }}</p> @enderror
        <label for="contactOffice">Contact Office:</label><br>
        <input type="text" id="contactOffice" name="contactOffice" autocomplete="off"
            value="{{ old('contactOffice') }}"><br>
        @error('contactOffice') <p style="color: red">{{ $message }}</p> @enderror
        <label for="contactPostal">Contact Postal:</label><br>
        <input type="text" id="contactPostal" name="contactPostal" autocomplete="off"
            value="{{ old('contactPostal') }}"><br>
        @error('contactPostal') <p style="color: red">{{ $message }}</p> @enderror
        <label for="contactAddress">Contact Address:</label><br>
        <input type="text" id="contactAddress" name="contactAddress" autocomplete="off"
            value="{{ old('contactAddress') }}"><br>
        @error('contactAddress') <p style="color: red">{{ $message }}</p> @enderror
        <label for="contactEmail">Contact Email:</label><br>
        <input type="text" id="contactEmail" name="contactEmail" autocomplete="off"
            value="{{ old('contactEmail') }}"><br>
        @error('contactEmail') <p style="color: red">{{ $message }}</p> @enderror
        <input class="btn btn-outline-warning" type="submit" value="Submit">
    </form>
</body>

</html>
