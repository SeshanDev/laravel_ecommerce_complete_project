<html>
    <head><title>Order</title></head>
<body>
@if($mode == 'Online Payment')
    <h2>Order Placed and Payment Successfully.We are processing your order.You will recive your Valuable Order Soon.Thank You for Dealing with Us!</h2><br/>
@else
    <h2>Your Order Placed Success.We are processing your order.You will recive your Valuable Order Soon.Thank You for Dealing with Us!</h2><br/>
@endif
<h2><b>Order Details</b></h2>
<table>
<tr><td><h4><b>Order_ID</b></h4></td><td> - </td><td><h4>{{$order_id}}</h4></td></tr>
@if($mode == 'Online Payment')
   <tr><td><h4><b>Payment_ID</b></h4></td><td> - </td><td><h4>{{$id}}</h4></td></tr>

@endif
<tr><td><h4><b>Payment_Mode</b></h4></td><td> - </td><td><h4>{{$mode}}</h4></td></tr>
<tr><td><h4><b>Total_Price</b></h4></td><td> - </td><td><h4>Rs.{{$tot}}.00</h4></td></tr>

</table>

<h2><b>Customer Details</b></h2>
<table>
<tr><td><h4><b>First Name</b></h4></td><td> - </td><td><h4>{{$fname}}</h4></td></tr>
<tr><td><h4><b>Last Name</b></h4></td><td> - </td><td><h4>{{$lname}}</h4></td></tr>
<tr><td><h4><b>Address</b></h4></td><td> - </td><td><h4>{{$address}}</h4></td></tr>
<tr><td><h4><b>City</b></h4></td><td> - </td><td><h4>{{$city}}</h4></td></tr>
<tr><td><h4><b>Email</b></h4></td><td> - </td><td><h4>{{$email}}</h4></td></tr>
<tr><td><h4><b>Phone Number</b></h4></td><td> - </td><td><h4>{{$phone}}</h4></td></tr>
</table>


<footer><h4 style="color: red">-Tec Com-</h4></footer>

            
</body></html>
