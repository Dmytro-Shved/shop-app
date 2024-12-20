<div class="grid__item">
    <article class="product {{ $cigarette->type }}">
        {{-- Image --}}
        <img class="product__image" src="{{ asset('./storage/' . $cigarette->image) }}" alt="{{ $cigarette->name }}" />

        <div class="product__description">
            {{-- Name --}}
            <h2 class="product__name">{{ $cigarette->name }}</h2>
            {{-- Info --}}
            <div class="product__info">

                {{ svg('hugeicons-body-part-muscle') }}&nbsp;Moc - {{ $cigarette->strength }}%
                <br>
                {{ svg('monoicon-wind') }}&nbsp;{{ $cigarette->puffs }} zaciągnięć
                <br>
                {{ svg('healthicons-o-fruits') }}&nbsp;Smak: {{ $cigarette->flavor }}
            </div>
            {{-- Price --}}
            <p class="product__price">{{ $cigarette->price }} zł</p>
        </div>

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
                    <button class="admin_delete_btn" type="submit">
                        {{ svg('ionicon-trash') }}
                    </button>
                </form>

                {{-- Go to a page with edit form --}}
                <button class="admin_edit_btn">
                    <a href="{{ route('cigarettes.edit', $cigarette) }}">
                        {{ svg('bi-pencil-square') }}
                    </a>
                </button>

                {{-- Go to a show page  --}}
                <button class="admin_show_btn">
                    <a href="{{ route('cigarettes.show', $cigarette) }}">
                        {{ svg('heroicon-s-eye') }}
                    </a>
                </button>

                {{-- If admin is on show page then don't display buttons --}}
                @elseif(Request::route()->getName() === 'cigarettes.show')

            {{-- If admin is on another page (index page), display button 'cart_button' --}}
            @else
                {{-- Cart buttons--}}
                <livewire:cart :productId="$cigarette->id" :productName="$cigarette->name" productType="cigarette"/>
            @endif
        @endauth
    </article>
</div>
