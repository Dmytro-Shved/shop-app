<div>
    {{-- See that product is in the cart --}}
    @if($cart->where('id', $productId)->first() && $cart->where('name', $productName)->first())
        <div class="#">
            In cart

            {{-- Delete from cart --}}
            <form wire:submit.prevent="delete('{{ $cart->where('id', $productId)->first()->rowId }}')">
                @csrf

                <!-- Delete from cart button -->
                <button type="submit" class="#">Delete from cart</button>
            </form>
        </div>

        {{-- If product NOT in the cart, then show cart add button --}}
    @else
        {{-- Cart button --}}
        <form wire:submit.prevent="store({{ $productId}}, '{{ $productType }}')">
            @csrf

            {{-- Quantity control --}}
            <div class="quantity-control">
                <button wire:click="decrement({{ $productId }})" type="button" class="quantity-button decrease">-</button>
                <input wire:model="quantity.{{ $productId }}" type="number" name="quantity" class="quantity-input" readonly/>
                <button wire:click="increment({{ $productId }})" type="button" class="quantity-button increase">+</button>
            </div>

            {{-- Cart button submit (with an image) --}}
            <button type="submit" class="button product__button" aria-label="Dodaj do koszyka">
                <svg class="button__icon" width="20" height="20">
                    <use href="./storage/images/footer-icons/symbol-defs.svg#icon-shopping-cart"></use>
                </svg>
            </button>
        </form>
    @endif
</div>
