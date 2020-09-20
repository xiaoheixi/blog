<form action="{{route('orders.store')}}" method="post">
    @csrf
    <label for="">Full Name</label><br>
    <input type="text" id="" name="shipping_fullname" autocomplete="off" value="{{ old('shipping_fullname') }}"><br>
    <label for="">Email:</label><br>
    <input type="text" id="" name="shipping_email" autocomplete="off" value="{{ old('shipping_email') }}"><br>
    <input type="radio" id="PayPal" name="payment_method" value="PayPal">
    <label for="PayPal">PayPal</label><br>
    <input type="radio" id="Square" name="payment_method" value="Square">
    <label for="Square">Square</label><br>
    <input type="radio" id="Stripe" name="payment_method" value="Stripe">
    <label for="Stripe">Stripe</label><br>
    <input type="submit" value="Purchase">
</form>
