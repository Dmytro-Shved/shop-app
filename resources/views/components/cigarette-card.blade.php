@props(['name', 'image', 'strength', 'puffs', 'flavor', 'price', 'type'])

<div class="grid__item">
    <article class="product {{ $type }}">
        {{-- Image --}}
        <img class="product__image" src="{{ asset('./storage/'. $image) }}" alt="{{ $name }}" />
        <div class="product__description">
            {{-- Name --}}
            <h2 class="product__name">{{ $name }}</h2>
            {{-- Info --}}
            <div class="product__info">
                ✔&nbsp;Moc - {{ $strength }}%
                <br>
                ✔&nbsp;{{ $puffs }} zaciągnięć
                <br>
                ✔&nbsp;Smak: {{ $flavor }}

            </div>
            {{-- Price --}}
            <p class="product__price">Cena: {{ $price }} zł</p>
        </div>

        @guest
        {{-- Buy button --}}
        <button class="button product__buy">Kupić</button>
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
                <button class="button-panel">Delete</button>
                <button class="button-panel">Edit</button>
                <button class="button-panel">Show</button>
            {{-- If admin is on another page (index page), display buttons 'buy' and 'cart_button' --}}
            @else
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
