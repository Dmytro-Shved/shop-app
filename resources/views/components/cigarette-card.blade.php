@props(['cigarette'])

<div class="grid__item">
    <article class="product {{ $cigarette->type }}">
        {{-- Image --}}
        <img class="product__image" src="{{ asset('./storage/'. $cigarette->image) }}" alt="{{ $cigarette->name }}" />
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

            {{-- If admin is on show page thrn don't display buttons --}}
            @elseif(Request::route()->getName() === 'cigarettes.show')

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
