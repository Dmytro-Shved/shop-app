@props(['name', 'image', 'strength', 'puffs', 'flavor', 'price', 'type'])

<li class="grid__item">
    <article class="product {{ $type }}">
        {{-- Image --}}
        <img class="product__image" src="{{ asset('./storage/images/'.$type.'/' . $image) }}" alt="{{ $name }}" />
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
        <button class="button product__buy">Kupić</button>
        {{-- Cart button --}}
        <button type="button" class="button product__button" aria-label="Dodaj do koszyka">
            <svg class="button__icon" width="20" height="20">
                <use href="./storage/images/footer-icons/symbol-defs.svg#icon-shopping-cart"></use>
            </svg>
        </button>
    </article>
</li>

<div>
    {{ $slot }}
</div>
