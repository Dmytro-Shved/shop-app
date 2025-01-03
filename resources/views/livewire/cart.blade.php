<div>
    {{-- See that product is in the cart --}}
    @if($cart->where('id', $productId)->first() && $cart->where('name', $productName)->first())

        {{-- Remove product from cart --}}
        <div>
            <form wire:submit="remove('{{ $cart->where('name', $productName)->where('id', $productId)->first()->rowId}}')">
                @csrf

                <button type="submit" class="delete-from-cart">Delete from cart</button>
            </form>
        </div>

        {{-- If product NOT in the cart, then show cart add button --}}
    @else
        {{-- Cart button --}}
        <form wire:submit="store({{ $productId}}, '{{ $productType }}')">
            @csrf

            {{-- Quantity control --}}
            <div class="quantity-control">
                <button wire:click="decrement({{ $productId }})" type="button" class="quantity-button decrease">-
                </button>
                <input wire:model="quantity.{{ $productId }}" type="number" name="quantity" class="quantity-input"
                       readonly/>
                <button wire:click="increment({{ $productId }})" type="button" class="quantity-button increase">+
                </button>
            </div>

            {{-- Cart button submit (with an image) --}}
            <button type="submit" class="button product__button" aria-label="Dodaj do koszyka">
                <svg class="button__icon" width="20" height="20">
                    <use href="./storage/images/footer-icons/symbol-defs.svg#icon-shopping-cart"></use>
                </svg>
                <div wire:loading wire:target="store({{ $productId}}, '{{ $productType }}')" class="spinner-container">
                    <div class="spinner"></div>
                </div>
            </button>
        </form>
    @endif
</div>
