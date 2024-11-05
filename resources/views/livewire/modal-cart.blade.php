<!-- Modal Cart -->
<div class="cart-modal" id="cart-modal">
    <div class="cart-modal__content">
        <button class="cart-modal__close" aria-label="Close Cart">✖️</button>
        <h2 class="cart-modal__heading">Your Cart</h2>

        {{-- Cart table --}}
        <div class="cart-table-container">
            <table class="cart-table">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Edit quantity</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                Products
                {{-- Loop for products from cart --}}
                @forelse($cart as $product)
                    <tr class="tr-border">
                        <!-- Product name -->
                        <td>{{ $product->name }}</td>

                        <!-- Product price -->
                        <td>{{ $product->price }} zł</td>

                        <!-- Product quantity -->
                        <td>
                            {{-- Quantity control --}}
                            <div class="quantity-control">
                                <button wire:click="decrement({{ $product->id }})" type="button" class="quantity-button decrease">-</button>
                                <input type="number" value="{{ $product->qty }}" name="quantity" class="quantity-input" readonly/>
                                <button wire:click="increment({{ $product->id }})" type="button" class="quantity-button increase">+</button>
                            </div>
                        </td>

                        {{-- Delete from cart --}}
                        <form action="{{ route('cart.delete') }}" method="POST" onsubmit="return confirm('Are you sure you want to remove {{ $product->name }} from cart?');">
                            @csrf
                            <!-- rowId -->
                            <input type="hidden" name="rowId" value="{{ $cart->where('id', $product->id)->first()->rowId }}">
                            <!-- Product id -->
                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                            <!-- Type -->
                            <input type="hidden" name="type" value="{{ $product->options['type'] }}">

                            <!-- Delete from cart button -->
                            <td><button type="submit" class="remove-item">🗑</button></td>
                        </form>

                        {{-- Przejdź do kasy --}}
                        <form action="{{ route('cart.accept') }}" method="POST">
                            @csrf
                            <button class="button cart-modal__checkout">Przejdź do kasy</button>
                        </form>
                        {{-- Total price --}}
                        <div class="cart-modal__total" id="cart-total">Total: {{ $total }} zł.</div>

                        {{-- Clear cart button --}}
                        <a
                            href="{{ route('cart.destroy') }}" onclick="return confirm('Destroy the cart?');">
                            <button class="cart-delete__basket">🛒&rarr;  <span class="bask">🗑</span></button>
                        </a>
                    </tr>
                @empty
                    <div>
                        <table class="cart-table">
                            <thead>
                            <tr>
                                <th>
                                    <p>Cart is empty, add your products!</p>
                                </th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                @endforelse
                </tbody>
            </table>
        </div>

    </div>
</div>
