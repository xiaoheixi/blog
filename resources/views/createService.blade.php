<!DOCTYPE html>
<html>
<head>
<title>Add a Service!</title>
</head>
<body>

<h1>Fill in the form to add a service below.</h1>
<form action="/storeService" method="post">
@csrf
  <label for="serviceName">Service Name:</label><br>
  <input type="text" id="serviceName" name="serviceName" autocomplete="off" value="{{ old('serviceName') }}"><br>
  @error('serviceName') <p style="color: red">{{ $message }}</p> @enderror
  <label for="serviceDescription">Service Description:</label><br>
  <input type="text" id="serviceDescription" name="serviceDescription" autocomplete="off" value="{{ old('serviceDescription') }}"><br>
  @error('serviceDescription') <p style="color: red">{{ $message }}</p> @enderror
  <label for="serviceLink">Service Link:</label><br>
  <textarea id="serviceLink" name="serviceLink" value="{{ old('serviceLink') }}"></textarea>
  @error('serviceLink') <p style="color: red">{{ $message }}</p> @enderror
  <input type="submit" value="Submit">
</form>
</body>
</html>