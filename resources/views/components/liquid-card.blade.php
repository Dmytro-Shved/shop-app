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

        {{-- Quantity control --}}
        <div class="quantity-control">
            <button class="quantity-button decrease">-</button>
            <input type="number" class="quantity-input" value="1" min="1" />
            <button class="quantity-button increase">+</button>
        </div>

        @guest
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
            {{-- Admin buttons... --}}
            {{-- Similar to the existing admin logic... --}}
        @endauth
    </article>
</div>

<div>
    {{ $slot }}
</div>
