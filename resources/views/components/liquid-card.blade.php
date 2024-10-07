@props(['liquid'])

<div class="grid__item">
    <article class="product liquid">
        {{-- Image --}}
        <img class="product__image" src="{{ asset('./storage/'. $liquid->image) }}" alt="{{ $liquid->name }}" />
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
                {{-- Delete Liquid --}}
                <form action="{{ route('liquids.destroy',  $liquid->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to remove {{ $liquid->name }} product ?');">
                    @csrf
                    @method('DELETE')
                    <button class="button-panel" type="submit">Delete</button>
                </form>
                <button>Edit</button>
                <button>Show</button>
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
