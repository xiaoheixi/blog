<!DOCTYPE html>
<html>
<head>
<title>Edit a Service!</title>
</head>
<body>

<h1>Fill in the form to edit a service below.</h1>
<form action="/service/{{ $serviceContent->serviceName }}" method="post">
@csrf
@method('PATCH')
  <label for="serviceName">Service Name:</label><br>
  <input type="text" id="serviceName" name="serviceName" autocomplete="off" value="{{ $serviceContent -> serviceName }}"><br>
  @error('serviceName') <p style="color: red">{{ $message }}</p> @enderror
  <label for="serviceDescription">Service Description:</label><br>
  <input type="text" id="serviceDescription" name="serviceDescription" autocomplete="off" value="{{ $serviceContent -> serviceDescription }}"><br>
  @error('serviceDescription') <p style="color: red">{{ $message }}</p> @enderror
  <label for="serviceLink">Service Link:</label><br>
  <input type="text" id="serviceLink" name="serviceLink" autocomplete="off" value="{{ $serviceContent -> serviceLink }}"><br>
  @error('serviceLink') <p style="color: red">{{ $message }}</p> @enderror
  <input type="submit" value="Submit">
</form>
</body>
</html>