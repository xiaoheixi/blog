<form action="/storeTransaction2" method="post">
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
  <input type="submit" value="Submit">
</form>