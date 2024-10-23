@props(['liquid', 'cart'])

<div class="grid__item">
    <article class="product liquid">
        {{-- Image --}}
        <img class="product__image" src="{{ asset('./storage/' . $liquid->image) }}" alt="{{ $liquid->name }}" />

        <div class="product__description">
            {{-- Name --}}
            <h2 class="product__name">{{ $liquid->name }}</h2>
            {{-- Info --}}
            <div class="product__info">
                ✔&nbsp;PG/VG - {{ $liquid->pg_vg_ratio }}
                <br>
                ✔&nbsp;Pojemność - {{ $liquid->volume }} ml
                <br>
                ✔&nbsp;Smak: {{ $liquid->flavor }}
            </div>
            {{-- Price --}}
            <p class="product__price">Cena: {{ $liquid->price }} zł</p>
        </div>

        {{-- Buttons for guests: [Buy] [Delete from cart] [Add to cart] --}}
        @guest
            {{-- Buy button --}}
            <button class="button product__buy">Kupić</button>

            {{-- If product is in the cart then show message and delete button --}}
            @if($cart->where('id', $liquid->id)->count())
                <div class="#">
                    In cart
                </div>

                {{-- Delete from cart --}}
                <form action="{{ route('cart.delete') }}" method="POST">
                    @csrf
                    <!-- rowId -->
                    <input type="hidden" name="rowId" value="{{ $cart->where('id', $liquid->id)->first()->rowId }}">
                    <!-- Product id -->
                    <input type="hidden" name="product_id" value="{{ $liquid->id }}">
                    <!-- Type -->
                    <input type="hidden" name="type" value="liquid">

                    <!-- Delete from cart button -->
                    <button type="submit" class="#">Delete from cart</button>
                </form>

            {{-- If product in NOT in the cart, then show cart add button --}}
            @else
                {{-- Cart button --}}
                <form action="{{ route('cart.store') }}" method="POST">
                    @csrf

                    {{-- Quantity control --}}
                    <div class="quantity-control">
                        <button type="button" class="quantity-button decrease">-</button>
                        <input type="number" name="quantity" class="quantity-input" value="1" min="1" readonly/>
                        <button type="button" class="quantity-button increase">+</button>
                    </div>

                    {{-- Product id --}}
                    <input type="hidden" name="product_id" value="{{ $liquid->id }}">
                    <input type="hidden" name="type" value="liquid">

                    {{-- Cart button submit (with an image) --}}
                    <button type="submit" class="button product__button" aria-label="Dodaj do koszyka">
                        <svg class="button__icon" width="20" height="20">
                            <use href="./storage/images/footer-icons/symbol-defs.svg#icon-shopping-cart"></use>
                        </svg>
                    </button>
                </form>
            @endif
        @endguest

        {{-- Buttons for admins: Admin Panel: [Delete product] [Edit page button] [Show page button] --}}
        @auth
            {{-- If admin is on admin_panel, display buttons for redact --}}
            @if (Request::route()->getName() === 'admin_panel')

                {{-- Delete Liquid --}}
                <form action="{{ route('liquids.destroy',  $liquid->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to remove {{ $liquid->name }} product ?');">
                    @csrf
                    @method('DELETE')
                    <button class="button-panel" type="submit">Delete</button>
                </form>

                {{-- Go to a page with edit form --}}
                <button class="button-panel">
                    <a href="{{ route('liquids.edit', $liquid) }}">Edit</a>
                </button>

                {{-- Go to a show page  --}}
                <button class="button-panel">
                    <a href="{{ route('liquids.show', $liquid) }}">Show</a>
                </button>

            {{-- If admin is on show page then don't display buttons --}}
            @elseif(Request::route()->getName() === 'liquids.show')

            {{-- If admin is on another page (index page), display buttons 'buy' and 'cart_button' --}}
            @else
                {{-- Buy button --}}
                <button class="button product__buy">Kupić</button>

                {{-- If product is in the cart then show message and delete button --}}
                @if($cart->where('id', $liquid->id)->count())
                    <div class="#">
                        In cart
                    </div>

                    {{-- Delete from cart --}}
                    <form action="{{ route('cart.delete') }}" method="POST">
                        @csrf
                        <!-- rowId -->
                        <input type="hidden" name="rowId" value="{{ $cart->where('id', $liquid->id)->first()->rowId }}">
                        <!-- Product id -->
                        <input type="hidden" name="product_id" value="{{ $liquid->id }}">
                        <!-- Type -->
                        <input type="hidden" name="type" value="liquid">

                        <!-- Delete from cart button -->
                        <button type="submit" class="#">Delete from cart</button>
                    </form>

                {{-- If product in NOT in the cart, then show cart add button --}}
                @else
                    {{-- Cart button --}}
                    <form action="{{ route('cart.store') }}" method="POST">
                        @csrf
                        {{-- Quantity control --}}
                        <div class="quantity-control">
                            <button type="button" class="quantity-button decrease">-</button>
                            <input type="number" name="quantity" class="quantity-input" value="1" min="1" />
                            <button type="button" class="quantity-button increase">+</button>
                        </div>

                        {{-- Product id --}}
                        <input type="hidden" name="product_id" value="{{ $liquid->id }}">
                        <input type="hidden" name="type" value="liquid">

                        {{-- Cart button submit (with an image) --}}
                        <button type="submit" class="button product__button" aria-label="Dodaj do koszyka">
                            <svg class="button__icon" width="20" height="20">
                                <use href="./storage/images/footer-icons/symbol-defs.svg#icon-shopping-cart"></use>
                            </svg>
                        </button>
                    </form>
                @endif
            @endif
        @endauth
    </article>
</div>

<div>
    {{ $slot }}
</div>
