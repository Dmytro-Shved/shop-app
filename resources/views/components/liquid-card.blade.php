@props(['liquid'])

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

        @guest
            {{-- Quantity control --}}
            <div class="quantity-control">
                <button class="quantity-button decrease">-</button>
                <input type="number" class="quantity-input" value="1" min="1" />
                <button class="quantity-button increase">+</button>
            </div>

            {{-- Buy button --}}
            <button class="button product__buy"
                    data-id="{{ $liquid->id }}"
                    data-name="{{ $liquid->name }}"
                    data-price="{{ $liquid->price }}">Kupić</button>
            {{-- Cart button --}}
            <button type="button" class="button product__button" aria-label="Dodaj do koszyka">
                <svg class="button__icon" width="20" height="20">
                    <use href="./storage/images/footer-icons/symbol-defs.svg#icon-shopping-cart"></use>
                </svg>
            </button>
        @endguest

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
                {{-- Quantity control --}}
                <div class="quantity-control">
                    <button class="quantity-button decrease">-</button>
                    <input type="number" class="quantity-input" value="1" min="1" />
                    <button class="quantity-button increase">+</button>
                </div>

                {{-- Buy button --}}
                <button class="button product__buy">Kupić</button>
                {{-- Cart button --}}
                <button type="button" class="button product__button" aria-label="Dodaj do koszyka">
                    <svg class="button__icon" width="20" height="20">
                        <use href="./storage/images/footer-icons/symbol-defs.svg#icon-shopping-cart"></use>
                    </svg>
                </button>
            @endif
        @endauth
    </article>
</div>

<div>
    {{ $slot }}
</div>
