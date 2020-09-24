<p>Your Cart</p>
<table style="width:100%">
    <tr>
        <th>Name</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Action</th>
    </tr>
    @foreach(\Cart::getContent() as $item)
    <tr>
        <td>{{ $item->name }}</td>
        <td>
            ${{Cart::get($item->id)->getpriceSum()}}
        </td>
        <form action="{{route('cart.update', $item->id)}}">
            <td><input name="quantity" type="number" value="{{ $item->quantity }}"><input class ="updateCartButton" type="submit" value="update">
            </td>
        </form>
        <td><a href="{{ route('cart.destroy', $item->id)}}"><button class="deleteCartButton">Delete</button></a>
    </tr>
    @endforeach
</table>
<h3>Total Price : ${{\Cart::getTotal()}}</h3>
<a name="" id="" class="btn btn-outline-warning" href="{{ route('cart.checkout') }}" role="button">Proceed to
    checkout</a>
