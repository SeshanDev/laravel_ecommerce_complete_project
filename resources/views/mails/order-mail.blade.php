<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Order Confirmation</title>
</head>
<body>
    <p>Hi {{$order->fname}} {{$order->lname}}</p>
    <p>Your Order Has been successfully Placed</p>
    <br/>

    <table style="width: 600px;text-align:right">
        <thead>
            <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Quantity</th>
                <th>Price</th>
        </thead>

        <tbody>
            @foreach ($collection as $item)
                
            @endforeach
        </tbody>
</body>
</html>