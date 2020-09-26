<form action="{{route('orders.store')}}" method="post" class="checkOutForm">
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
<!--<div class="container">
    <div class="row">
    <div class="col-md-12"><pre id="token_response"></pre></div>
    </div>
    <div class="row">
    <div class="col-md-4">
    <button class="btn btn-primary btn-block" onclick="pay(10)">Pay $10</button>
    </div>
    <div class="col-md-4">
    <button class="btn btn-success btn-block" onclick="pay(50)">Pay $50</button>
    </div>
    <div class="col-md-4">
    <button class="btn btn-info btn-block" onclick="pay(100)">Pay $100</button>
    </div>
    </div>
    </div>
<script src="https://checkout.stripe.com/checkout.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    });

    function pay(amount) {
        var handler = StripeCheckout.configure({
            key: 'pk_test_5f6jfFP2ZV5U9TXQYG0vtqFJ00eFVWNoRX', // your publisher key id
            locale: 'auto',
            token: function (token) {
                // You can access the token ID with `token.id`.
                // Get the token ID to your server-side code for use.
                console.log('Token Created!!');
                console.log(token)
                $('#token_response').html(JSON.stringify(token));
                $.ajax({
                    url: '{{ url("store") }}',
                    method: 'post',
                    data: {
                        tokenId: token.id,
                        amount: amount
                    },
                    success: (response) => {
                        console.log(response)
                    },
                    error: (error) => {
                        console.log(error);
                        alert('Oops! Something went wrong')
                    }
                })
            }
        });
        handler.open({
            name: 'Demo Site',
            description: '2 widgets',
            amount: amount * 100
        });
    }

</script>
-->