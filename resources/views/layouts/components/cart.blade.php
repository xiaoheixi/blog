<p>Your Cart</p>
<table style="width:100%">
  <tr>
    <th>Product</th>
    <th>Price</th>
    <th>Quantity</th>
    <th>Total</th>
  </tr>
  $cartItems = {{ \Cart::getContent() }}
  @foreach($cartItems as $item)
    <tr>
      <td>{{ $item->name }}</td>
      <td>{{ $item->price}}</td>
      <td>{{ $item->quantity }}</td>
    </tr>
  @endforeach
</table>