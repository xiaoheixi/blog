<!DOCTYPE html>
<html>
<head>
<title>Add a Transaction!</title>
</head>
<body>

<h1>Fill in the form to add a transaction below.</h1>
<form action="/storeTransaction" method="post">
@csrf
  <label for="firstName">First Name:</label><br>
  <input type="text" id="firstName" name="firstName" autocomplete="off" value="{{ old('firstName') }}"><br>
  @error('firstName') <p style="color: red">{{ $message }}</p> @enderror
  <label for="lastName">Last Name:</label><br>
  <input type="text" id="lastName" name="lastName" autocomplete="off" value="{{ old('lastName') }}"><br>
  @error('lastName') <p style="color: red">{{ $message }}</p> @enderror
  <label for="email">Email:</label><br>
  <input type="text" id="email" name="email" autocomplete="off" value="{{ old('email') }}"><br>
  @error('email') <p style="color: red">{{ $message }}</p> @enderror
  <input type="radio" id="PayPal" name="paymentMethod" value="PayPal">
  <label for="PayPal">Paypal</label><br>
  <input type="radio" id="Square" name="paymentMethod" value="Square">
  <label for="Square">Square</label><br>
  <input type="radio" id="Stripe" name="paymentMethod" value="Stripe">
  <label for="Stripe">Stripe</label><br>
  @error('paymentMethod') <p style="color: red">{{ $message }}</p> @enderror
  <label for="productName">Product Name:</label><br>
  <input type="text" id="productName" name="productName" autocomplete="off" value="{{ old('productName') }}"><br>
  @error('productName') <p style="color: red">{{ $message }}</p> @enderror
  <label for="productPrice">Product Price:</label><br>
  <input type="text" id="productPrice" name="productPrice" autocomplete="off" value="{{ old('productPrice') }}"><br>
  @error('productPrice') <p style="color: red">{{ $message }}</p> @enderror
  <label for="totalPrice">Total Price:</label><br>
  <input type="text" id="totalPrice" name="totalPrice" autocomplete="off" value="{{ old('totalPrice') }}"><br>
  @error('totalPrice') <p style="color: red">{{ $message }}</p> @enderror
  <label for="quantity">Quantity:</label><br>
  <input type="text" id="quantity" name="quantity" autocomplete="off" value="{{ old('quantity') }}"><br>
  @error('quantity') <p style="color: red">{{ $message }}</p> @enderror
  <input type="submit" value="Submit">
</form>
</body>
</html>