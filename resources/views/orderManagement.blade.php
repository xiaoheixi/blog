<!DOCTYPE html>
<html>
<head>
<title>Order History</title>
</head>
<body>

<h1>Welcome to Order History</h1>
<table style="width:100%">
  <tr>
    <th>Order Number</th>
    <th>Status</th>
    <th>Total Price</th>
    <th>Quantity</th>
    <th>Paid Yet</th>
    <th>Payment Method</th>
    <th>Shipping Full Name</th>
    <th>Shipping Email</th>
    <th>Billing Full Name</th>
    <th>Billing Email</th>
  </tr>
@foreach($orderContent as $order)
<tr>
    <td>{{$order->order_number}}</a></td>
    <td>{{$order->status}}</td>
    <td>{{$order->grand_total}}</td>
    <td>{{$order->item_count}}</td>
    <td>{{$order->is_paid}}</td>
    <td>{{$order->payment_method}}</td>
    <td>{{$order->shipping_fullname}}</td>
    <td>{{$order->shipping_email}}</td>
    <td>{{$order->notes}}</td>
    <td>{{$order->billing_fullname}}</td>
    <td>{{$order->billing_email}}</td>
</tr>
@endforeach
</table>

</body>
</html>
