<div class="grid__item">
    <article class="product {{ $cigarette->type }}">
        {{-- Image --}}
        <img class="product__image" src="{{ asset('./storage/' . $cigarette->image) }}" alt="{{ $cigarette->name }}" />

        <div class="product__description">
            {{-- Name --}}
            <h2 class="product__name">{{ $cigarette->name }}</h2>
            {{-- Info --}}
            <div class="product__info">
                ✔&nbsp;Moc - {{ $cigarette->strength }}%
                <br>
                ✔&nbsp;{{ $cigarette->puffs }} zaciągnięć
                <br>
                ✔&nbsp;Smak: {{ $cigarette->flavor }}
            </div>
            {{-- Price --}}
            <p class="product__price">Cena: {{ $cigarette->price }} zł</p>
        </div>

        {{-- Buy button --}}
        <button class="button product__buy">Kupić</button>

        {{-- Buttons for guests: [Delete from cart] [Add to cart] --}}
        @guest
            <livewire:cart :productId="$cigarette->id" :productName="$cigarette->name" productType="cigarette"/>
        @endguest

        {{-- Buttons for admins: Admin Panel: [Delete product] [Edit page button] [Show page button] --}}
        @auth
            {{-- If admin is on admin_panel, display buttons for redact --}}
            @if (Request::route()->getName() === 'admin_panel')

                {{-- Delete Cigarette --}}
                <form action="{{ route('cigarettes.destroy',  $cigarette->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to remove {{ $cigarette->name }} product ?');">
                    @csrf
                    @method('DELETE')
                    <button class="button-panel" type="submit">Delete</button>
                </form>

                {{-- Go to a page with edit form --}}
                <button class="button-panel">
                    <a href="{{ route('cigarettes.edit', $cigarette) }}">Edit</a>
                </button>

                {{-- Go to a show page  --}}
                <button class="button-panel">
                    <a href="{{ route('cigarettes.show', $cigarette) }}">Show</a>
                </button>

                {{-- If admin is on show page then don't display buttons --}}
            @elseif(Request::route()->getName() === 'cigarettes.show')

                {{-- If admin is on another page (index page), display buttons 'buy' and 'cart_button' --}}
            @else
                {{-- Buy button --}}
                <button class="button product__buy">Kupić</button>

                {{-- If product is in the cart then show message and delete button --}}
                @if(2 > 4)
                    <div class="#">
                        In cart
                    </div>

                    {{-- Delete from cart --}}
                    <form action="{{ route('cart.delete') }}" method="POST">
                        @csrf
                        <!-- rowId -->
                        <input type="hidden" name="rowId" value="">
                        <!-- Product id -->
                        <input type="hidden" name="product_id" value="{{ $cigarette->id }}">
                        <!-- Type -->
                        <input type="hidden" name="type" value="cigarette">

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
                        <input type="hidden" name="product_id" value="{{ $cigarette->id }}">
                        <input type="hidden" name="type" value="cigarette">

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

