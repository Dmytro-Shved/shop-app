@props(['name' => '#', 'image' => '#', 'pg_vg_ratio' => '#', 'volume' => '#', 'flavor' => '#', 'price' => '#'])

<li class="grid__item">
    <article class="product liquid">
        <img class="product__image" src="{{ asset('./storage/images/liquid/' . $image) }}" alt="{{ $name }}" />
        <div class="product__description">
            <h2 class="product__name">{{ $name }}</h2>
            <div class="product__info">
                ✔&nbsp;PG/VG - {{ $pg_vg_ratio }}
                <br>
                ✔&nbsp;Pojemność - {{ $volume }} ml
                <br>
                ✔&nbsp;Smak: {{ $flavor }}
            </div>
            <p class="product__price">Cena: {{ $price }} zł</p>
        </div>
        <button class="button product__buy">Kupić</button>
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
