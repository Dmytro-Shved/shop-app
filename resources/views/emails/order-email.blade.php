<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    @vite('resources/css/order-email.css')
</head>
<body>

<div class="email-container">
    <h1>Hi {{ $order->name }} , here is your order</h1>

    <div class="order-details">
        <p><span class="section-title">Name:</span> {{ $order->name }}</p>
        <p><span class="section-title">Email:</span> {{ $order->email }}</p>
        <p><span class="section-title">Phone:</span> {{ $order->phone }}</p>
        <p><span class="section-title">Address:</span> {{ $order->address }}</p>
        <p><span class="section-title">City:</span> {{ $order->city }}</p>
        <p><span class="section-title">Post Office:</span> {{ $order->post_office }}</p>
        <p><span class="section-title">Details:</span> {{ $order->details }}</p>
        <p><span class="section-title">Payment Method:</span> {{ $order->payment_method }}</p>
    </div>

    <h2>Products Ordered</h2>
    <table class="products-table">
        <thead>
        <tr>
            <th>Product Name</th>
            <th>Quantity</th>
            <th>Price</th>
        </tr>
        </thead>
        <tbody>
        @foreach($order->products as $product)
            <tr>
                <td>{{ $product['name'] }}</td>
                <td>{{ $product['quantity'] }}</td>
                <td>{{ number_format($product['price'], 2) }} zł</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <div class="total-container">
        <p class="total-text">Total: {{ number_format($order->total, 2) }} zł</p>
    </div>

    <div class="footer">
        <p>&copy; {{ date('Y') }} ElfVapeShop. All Rights Reserved.</p>
    </div>
</div>

</body>
</html>
