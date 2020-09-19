<!DOCTYPE html>
<html>
  <head>
    <title>Transaction Management</title>
  </head>
  <body>
    <h1>Welcome to Transaction Management</h1>
    <a href="{{url('createTransaction')}}" class="btn btn-primary">Add Transaction</a>
    <table style="width:100%">
      <tr>
        <th>Transaction ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Payment Method</th>
        <th>Product Name</th>
        <th>Product Price</th>
        <th>Total Price</th>
        <th>Quantity</th>
        <th></th>
        <th></th>
      </tr>
      @foreach($transactionContent as $transaction)
        <tr>
          <td>{{$transaction->transactionID}}</td>
          <td>{{$transaction->firstName}}</td>
          <td>{{$transaction->lastName}}</td>
          <td>{{$transaction->email}}</td>
          <td>{{$transaction->paymentMethod}}</td>
          <td>{{$transaction->productName}}</td>
          <td>{{$transaction->productPrice}}</td>
          <td>{{$transaction->totalPrice}}</td>
          <td>{{$transaction->quantity}}</td>
          <td><a href="/transaction/{{ $transaction->transactionID }}/edit">Modify</a></td>
          <td>
            <form action="/transaction/{{ $transaction->transactionID }}" method="post">
              @csrf
              @method('DELETE')
              <button>Delete</button>
            </form>
          </td>
        </tr>
      @endforeach
    </table>
  </body>
</html>