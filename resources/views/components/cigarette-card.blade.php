@props(['cigarette'])

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

        {{-- Quantity control --}}
        <div class="quantity-control">
            <button class="quantity-button decrease">-</button>
            <input type="number" class="quantity-input" value="1" min="1" />
            <button class="quantity-button increase">+</button>
        </div>

        @guest
            {{-- Buy button --}}
            <button class="button product__buy" 
                    data-id="{{ $cigarette->id }}" 
                    data-name="{{ $cigarette->name }}" 
                    data-price="{{ $cigarette->price }}">Kupić</button>
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
