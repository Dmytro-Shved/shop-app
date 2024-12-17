<!-- Modal Cart -->
<div class="cart-modal"

     x-data="{ visible : false  }" {{-- creating an alpine js block with value 'visible '--}}
     x-show="visible" {{-- toggle the visibility of an element using true/false in 'visible' --}}
     x-on:open-modal.window="visible = true"
     x-on:close-modal.window="visible = false"
     x-on:keydown.escape.window="visible = false" {{-- if the Esc button is pressed then close the modal with false in 'visible' --}}
     x-bind:class="{'show': visible}" {{-- add or remove a CSS class (show) depending on the value of the visible variable. --}}
>
    {{-- Cart modal content --}}
    <div x-data x-on:click.outside="visible = false" class="cart-modal__content">

        {{-- Close modal button--}}
        <button x-data x-on:click="$dispatch('close-modal')" class="cart-modal__close" aria-label="Close Cart">✖️</button>

        <h2 class="cart-modal__heading">Your Cart</h2>

        {{-- Cart table --}}
        <div class="cart-table-container">
            <table class="cart-table">
                {{-- If the cart is empty then do not show table headers --}}
                @if($cart->count())
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Edit quantity</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                @endif

                <tbody>
                    {{-- Loop for products from cart --}}
                    @forelse($cart as $product)
                        
                        <tr class="tr-border">
                            <!-- product name -->
                            <td>{{ $product->name }}</td>

                            <!-- product price -->
                            <td>{{ $product->price }} zł</td>

                            <!-- product quantity -->
                            <td>
                                {{-- Quantity control --}}
                                <div class="quantity-control">


                                    {{-- decrement quantity--}}
                                    <button wire:click="update_qty_dec('{{ $product->rowId }}', {{ $product->qty - 1 }})"
                                            type="button" class="quantity-button decrease">-
                                    </button>

                                    {{-- current quantity--}}
                                    <input type="number" value="{{ $product->qty }}" name="quantity" class="quantity-input" readonly/>

                                    {{-- increment quantity--}}
                                    <button wire:click="update_qty_inc('{{ $product->rowId }}', {{ $product->qty + 1 }})"
                                            type="button" class="quantity-button increase">+
                                    </button>
                                </div>
                            </td>

                            {{-- Remove product from cart button --}}
                            <td>
                                <button wire:click="remove('{{ $product->rowId }}')" type="submit"
                                        class="remove-item">{{ svg('ionicon-trash') }}
                                </button>
                            <td>

                            {{-- Proceed to payment --}}
                            <a href="{{ route('cart.order') }}">
                                <button class="button cart-modal__checkout">Przejdź do kasy</button>
                            </a>

                            {{-- Total price --}}
                            <div class="cart-modal__total" id="cart-total">Total price: {{ $total }} zł.</div>

                            {{-- Destroy cart --}}
                            <form wire:submit="destroy_cart">
                                @csrf
                                <button x-on:click="$wire.destroy_cart()" class="cart-delete__basket">
                                    {{ svg('eos-remove-shopping-cart') }}
                                </button>
                            </form>

                        </tr>
                    {{-- If cart is empty then show the text --}}
                    @empty
                        <p class="image-container">
                            {{ svg('hugeicons-shopping-cart-remove-01') }}
                        </p>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
