<!DOCTYPE html>
<html>
<head>
<title>Add a Contact Detail!</title>
</head>
<body>

<h1>Fill in the form to add a contact detail below.</h1>
<form action="/storeContact" method="post">
@csrf
  <label for="contactName">Contact Name:</label><br>
  <input type="text" id="contactName" name="contactName" autocomplete="off" value="{{ old('contactName') }}"><br>
  @error('contactName') <p style="color: red">{{ $message }}</p> @enderror
  <label for="contactOffice">Contact Office:</label><br>
  <input type="text" id="contactOffice" name="contactOffice" autocomplete="off" value="{{ old('contactOffice') }}"><br>
  @error('contactOffice') <p style="color: red">{{ $message }}</p> @enderror
  <label for="contactPostal">Contact Postal:</label><br>
  <input type="text" id="contactPostal" name="contactPostal" autocomplete="off" value="{{ old('contactPostal') }}"><br>
  @error('contactPostal') <p style="color: red">{{ $message }}</p> @enderror
  <label for="contactAddress">Contact Address:</label><br>
  <input type="text" id="contactAddress" name="contactAddress" autocomplete="off" value="{{ old('contactAddress') }}"><br>
  @error('contactAddress') <p style="color: red">{{ $message }}</p> @enderror
  <label for="contactEmail">Contact Email:</label><br>
  <input type="text" id="contactEmail" name="contactEmail" autocomplete="off" value="{{ old('contactEmail') }}"><br>
  @error('contactEmail') <p style="color: red">{{ $message }}</p> @enderror
  <input type="submit" value="Submit">
</form>
</body>
</html>