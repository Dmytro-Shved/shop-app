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

                        <tr class="tr-border" wire:key="product-{{ $product->rowId }}">
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
                                <button
                                    wire:click="remove('{{ $product->rowId }}')"
                                    wire:target="remove('{{ $product->rowId }}')"
                                    wire:loading.attr="disabled"
                                    wire:loading.class="remove-item-loading"
                                    type="submit"
                                    class="remove-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                                        <path fill-rule="evenodd" d="M16.5 4.478v.227a48.816 48.816 0 0 1 3.878.512.75.75 0 1 1-.256 1.478l-.209-.035-1.005 13.07a3 3 0 0 1-2.991 2.77H8.084a3 3 0 0 1-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 0 1-.256-1.478A48.567 48.567 0 0 1 7.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 0 1 3.369 0c1.603.051 2.815 1.387 2.815 2.951Zm-6.136-1.452a51.196 51.196 0 0 1 3.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 0 0-6 0v-.113c0-.794.609-1.428 1.364-1.452Zm-.355 5.945a.75.75 0 1 0-1.5.058l.347 9a.75.75 0 1 0 1.499-.058l-.346-9Zm5.48.058a.75.75 0 1 0-1.498-.058l-.347 9a.75.75 0 0 0 1.5.058l.345-9Z" clip-rule="evenodd" />
                                    </svg>
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
                                <button
                                    x-on:click="$wire.destroy_cart()"
                                    wire:loading.attr="disabled"
                                    wire:target="destroy_cart"
                                    wire:loading.class="cart-delete__basket--loading"
                                    class="cart-delete__basket">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                                        <path d="M2.25 2.25a.75.75 0 0 0 0 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 0 0-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 0 0 0-1.5H5.378A2.25 2.25 0 0 1 7.5 15h11.218a.75.75 0 0 0 .674-.421 60.358 60.358 0 0 0 2.96-7.228.75.75 0 0 0-.525-.965A60.864 60.864 0 0 0 5.68 4.509l-.232-.867A1.875 1.875 0 0 0 3.636 2.25H2.25ZM3.75 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0ZM16.5 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                                        <path fill-rule="evenodd" d="M16.72 7.72a.75.75 0 0 1 1.06 0l3.75 3.75a.75.75 0 0 1 0 1.06l-3.75 3.75a.75.75 0 1 1-1.06-1.06l2.47-2.47H3a.75.75 0 0 1 0-1.5h16.19l-2.47-2.47a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                                        <path fill-rule="evenodd" d="M16.5 4.478v.227a48.816 48.816 0 0 1 3.878.512.75.75 0 1 1-.256 1.478l-.209-.035-1.005 13.07a3 3 0 0 1-2.991 2.77H8.084a3 3 0 0 1-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 0 1-.256-1.478A48.567 48.567 0 0 1 7.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 0 1 3.369 0c1.603.051 2.815 1.387 2.815 2.951Zm-6.136-1.452a51.196 51.196 0 0 1 3.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 0 0-6 0v-.113c0-.794.609-1.428 1.364-1.452Zm-.355 5.945a.75.75 0 1 0-1.5.058l.347 9a.75.75 0 1 0 1.499-.058l-.346-9Zm5.48.058a.75.75 0 1 0-1.498-.058l-.347 9a.75.75 0 0 0 1.5.058l.345-9Z" clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </form>
                        </tr>
                    {{-- If cart is empty then show the text --}}
                    @empty
                        <p class="image-container">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                                <path fill-rule="evenodd" d="m6.72 5.66 11.62 11.62A8.25 8.25 0 0 0 6.72 5.66Zm10.56 12.68L5.66 6.72a8.25 8.25 0 0 0 11.62 11.62ZM5.105 5.106c3.807-3.808 9.98-3.808 13.788 0 3.808 3.807 3.808 9.98 0 13.788-3.807 3.808-9.98 3.808-13.788 0-3.808-3.807-3.808-9.98 0-13.788Z" clip-rule="evenodd" />
                            </svg>
                        </p>
                        <p style="text-align: center">Empty cart...</p>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
