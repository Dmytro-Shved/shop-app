<!doctype html>
<html lang="en">
<head>
    <title>Cart accept page</title>
    @vite('resources/css/main.css')
    @vite('resources/css/basket.css')
    <link rel="icon" type="image/png" href="data:image/jpeg;base64,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">
</head>
<body>
        <div class="cart-modal__content">
            <h2 class="cart-modal__heading">Cart access page</h2>

            {{-- Cart table --}}
            <div class="cart-table-container">
                <table class="cart-table">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                    </tr>
                    </thead>
                    <tbody>
                    {{-- Loop for products from cart --}}
                    @forelse($cart as $product)
                        <tr class="tr-border">
                            <!-- Product name -->
                            <td>{{ $product->name }}</td>

                            <!-- Product price -->
                            <td>{{ $product->price }} zł</td>

                            <!-- Product quantity -->
                            <td>
                                <input type="number" class="quantity-input" value="{{ $product->qty }}" min="1" readonly>
                            </td>
                        </tr>
                    @empty
                        <div>
                            <p>Cart is empty, add your products!</p>
                        </div>
                    @endforelse
                    </tbody>
                </table>
            </div>
            {{-- Total price --}}
            <h3 class="#">Total: {{ $total }} zł.</h3>
        </div>
        <div>
            <h2>Metody płatności:</h2>
            <ul>
                <li> • Blik</li>
                <li> • Opłata przy odbiorze</li>
                <li> • Apple pay</li>
                <li> • Google pay</li>
                <li> • PayPal</li>
            </ul>
        </div>
</body>
</html>


