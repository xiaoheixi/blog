<!DOCTYPE html>
<html>
<head>
<title>Edit a Contact Detail!</title>
</head>
<body>

<h1>Fill in the form to edit a contact detail below.</h1>
<form action="/contact/{{ $contactDetail->contactName }}" method="post">
@csrf
@method('PATCH')
  <label for="contactName">Contact Name:</label><br>
  <input type="text" id="contactName" name="contactName" autocomplete="off" value="{{ $contactDetail->contactName }}"><br>
  @error('contactName') <p style="color: red">{{ $message }}</p> @enderror
  <label for="contactOffice">Contact Office:</label><br>
  <input type="text" id="contactOffice" name="contactOffice" autocomplete="off" value="{{ $contactDetail->contactOffice }}"><br>
  @error('contactOffice') <p style="color: red">{{ $message }}</p> @enderror
  <label for="contactPostal">Contact Postal:</label><br>
  <input type="text" id="contactPostal" name="contactPostal" autocomplete="off" value="{{ $contactDetail->contactPostal }}"><br>
  @error('contactPostal') <p style="color: red">{{ $message }}</p> @enderror
  <label for="contactAddress">Contact Address:</label><br>
  <input type="text" id="contactAddress" name="contactAddress" autocomplete="off" value="{{ $contactDetail->contactAddress }}"><br>
  @error('contactAddress') <p style="color: red">{{ $message }}</p> @enderror
  <label for="contactEmail">Contact Email:</label><br>
  <input type="text" id="contactEmail" name="contactEmail" autocomplete="off" value="{{ $contactDetail->contactEmail }}"><br>
  @error('contactEmail') <p style="color: red">{{ $message }}</p> @enderror
  <input type="submit" value="Submit">
</form>
</body>
</html>