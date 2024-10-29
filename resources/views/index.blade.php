<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Papieros</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jersey+10&family=New+Amsterdam&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{ asset('storage/images/logo/logo_link.png') }}">

    <!-- <link rel="stylesheet" href=".\resources\css\main.css"/> -->

    @yield('content')

    @vite('resources/css/main.css')
    @vite('resources/css/basket.css')

    @vite('resources/js/app.js')
    @vite('resources/js/bootstrap.js')
    @vite('resources/js/hurt.js')
    @vite('resources/js/main.js')
    @vite('resources/js/filtr.js')
    @vite('resources/js/reviews.js')
    @vite('resources/js/basket-js/quantity-product.js')
    @vite('resources/js/basket-js/button-modal.js')
    @vite('resources/js/basket-js/buy.js')
    @vite('resources/js/basket-js/cart.js')

    <!-- @vite('resources/js/reviews.js') -->

    @vite('public/images')

    @vite('resources/js/header-menu.js')
</head>

<body id="element">
    <header class="header">
        <div class="container header__container">
            <a href="#" class="header__photo">
                <img class="header__logo" src="{{ asset('storage/images/logo/logo-header.svg') }}" alt="logo-header" />
            </a>
            <div class="menu-icon" id="menuIcon">&#9776;</div>

            <nav class="header__nav" id="mobileMenu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="#сat" rel="preconnect" class="nav__link">KATALOG</a>
                    </li>
                    <li class="nav__item">
                        <a href="#rec" rel="preconnect" class="nav__link">RECENZJE</a>
                    </li>
                    <li class="nav__item">
                        <a href="#kon" rel="preconnect" class="nav__link">KONTAKT</a>
                    </li>
                    <li class="nav__item">
                        <a href="#wholesale" rel="preconnect" class="nav__link">HURTOWNIA</a>
                    </li>
                </ul>
            </nav>

            <div class="header-button"><a href="https://t.me/GgYyPpSsY" target="_blank" rel="noopener">subskrybuj
                    Telegram</a></div>

            <div class="overlay" id="overlay"></div>
        </div>
    </header>

    <main class="main">

        <section class="hero">
            <div class="hero-video">
                <video autoplay muted loop playsinline>
                    <source src="{{ asset('./storage/videos/hero-video.mp4') }}" type="video/mp4">
                    Ваш браузер не поддерживает видео.
                </video>
            </div>
            <div class="container hero-container">

                <h1 class="hero-title"> Twoja nowa rzeczywistość <br>zaczyna się tutaj</h1>
            </div>
            <div class="creeping-line">
                <div>
                    <h2 class="creeping-title">DARMOWA DOSTAWA OD 4 SZT • </h2>
                    <h2 class="creeping-title">DARMOWA DOSTAWA OD 4 SZT • </h2>
                    <h2 class="creeping-title">DARMOWA DOSTAWA OD 4 SZT • </h2>
                    <h2 class="creeping-title">DARMOWA DOSTAWA OD 4 SZT • </h2>
                    <h2 class="creeping-title">DARMOWA DOSTAWA OD 4 SZT • </h2>
                    <h2 class="creeping-title">DARMOWA DOSTAWA OD 4 SZT • </h2>
                    <h2 class="creeping-title">DARMOWA DOSTAWA OD 4 SZT • </h2>
                    <h2 class="creeping-title">DARMOWA DOSTAWA OD 4 SZT • </h2>
                    <h2 class="creeping-title">DARMOWA DOSTAWA OD 4 SZT • </h2>
                    <h2 class="creeping-title">DARMOWA DOSTAWA OD 4 SZT • </h2>
                    <h2 class="creeping-title">DARMOWA DOSTAWA OD 4 SZT • </h2>
                    <h2 class="creeping-title">DARMOWA DOSTAWA OD 4 SZT • </h2>
                    <h2 class="creeping-title">DARMOWA DOSTAWA OD 4 SZT • </h2>
                </div>
            </div>
        </section>

        <section class="catalog" id="сat">

        {{-- Session messages --}}
        @if(session()->has('added'))
            <div class="#" id="flash-message">
                {{ session('added') }}
            </div>
        @elseif(session()->has('removed'))
            <div class="#" id="flash-message">
                {{ session('removed') }}
            </div>
        @elseif(session()->has('updated'))
            <div class="#" id="flash-message">
                {{ session('updated') }}
            </div>
        @elseif(session()->has('destroyed'))
            <div class="#" id="flash-message">
                {{ session('destroyed') }}
            </div>
        @elseif(session()->has('empty'))
            <div class="#" id="flash-message">
                {{ session('empty') }}
            </div>
        @endif

            <div class="container">

                {{-- Filter --}}
                <ul class="filter-list">
                    <li class="filter-item" data-filter="">All</li>
                    <li class="filter-item" data-filter="liquid">Liquid</li>
                    <li class="filter-item" data-filter="elfbar">Elfbar</li>
                    <li class="filter-item" data-filter="pod">Vape</li>
                </ul>

                <div class="grid">
                    {{-- Cigarettes --}}
                    @forelse($cigarettes as $cigarette)
                        <x-cigarette-card :cigarette="$cigarette"
                                          :cart="$cart"
                        />
                    @empty
                        <div class="#">
                            No cigarettes in the database
                        </div>
                    @endforelse

                    {{-- Liquids --}}
                    @forelse($liquids as $liquid)
                        <x-liquid-card :liquid="$liquid"
                                       :cart="$cart"
                        />

                    @empty
                        <div class="#">
                            No liquids in the database
                        </div>
                    @endforelse
                </div>
            </div>
        </section>

        <section class="reviews" id="rec">
            <h2 class="reviews-title">RECENZJE</h2>
            <div class="star__img">
                <svg role="presentation" width="" height="21.48px" viewBox="0 0 88 21" class="star__svg">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g fill="#ff5100">
                            <path
                                d="M77.2,20.9 C77.2,20.9 76.3,16.6 73.7,14 C71.1,11.4 66.8,10.5 66.8,10.5 C66.8,10.5 71.1,9.6 73.7,7 C76.3,4.3 77.2,0 77.2,0 C77.2,0 78.1,4.3 80.7,7 C83.3,9.6 87.7,10.5 87.7,10.5 C87.7,10.5 83.4,11.4 80.8,14 C78.1,16.6 77.2,20.9 77.2,20.9 L77.2,20.9 Z"
                                id="shape"></path>
                            <path
                                d="M44.3,20.9 C44.3,20.9 43.4,16.6 40.8,14 C38.2,11.4 33.9,10.5 33.9,10.5 C33.9,10.5 38.2,9.6 40.8,7 C43.4,4.3 44.3,0 44.3,0 C44.3,0 45.2,4.3 47.8,7 C50.4,9.6 54.8,10.5 54.8,10.5 C54.8,10.5 50.5,11.4 47.9,14 C45.2,16.6 44.3,20.9 44.3,20.9 L44.3,20.9 Z"
                                id="shape"></path>
                            <path
                                d="M11.1,20.9 C11.1,20.9 10.2,16.6 7.6,14 C5,11.4 0.7,10.5 0.7,10.5 C0.7,10.5 5,9.6 7.6,7 C10.1,4.3 11.1,0 11.1,0 C11.1,0 12,4.3 14.6,7 C17.2,9.6 21.6,10.5 21.6,10.5 C21.6,10.5 17.3,11.4 14.7,14 C12,16.6 11.1,20.9 11.1,20.9 L11.1,20.9 Z"
                                id="shape">
                            </path>
                        </g>
                    </g>
                </svg>

            </div>
            <div class="carousel">
                <div class="carousel-item">
                    <div class="carousel-box">
                        <img class="product__image" src="{{ asset('./storage/images/reviews-img/tg1.jpg') }}"
                            alt="Liquid Mango" />
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="carousel-box">
                        <img class="product__image" src="{{ asset('./storage/images/reviews-img/tg1.jpg') }}"
                            alt="Liquid Mango" />
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="carousel-box">
                        <img class="product__image" src="{{ asset('./storage/images/reviews-img/tg1.jpg') }}"
                            alt="Liquid Mango" />
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="carousel-box">
                        <img class="product__image" src="{{ asset('./storage/images/reviews-img/tg1.jpg') }}"
                            alt="Liquid Mango" />
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="carousel-box">
                        <img class="product__image" src="{{ asset('./storage/images/reviews-img/tg1.jpg') }}"
                            alt="Liquid Mango" />
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="carousel-box">
                        <img class="product__image" src="{{ asset('./storage/images/reviews-img/tg1.jpg') }}"
                            alt="Liquid Mango" />
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-box">
                        <img class="product__image" src="{{ asset('./storage/images/reviews-img/tg1.jpg') }}"
                            alt="Liquid Mango" />
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-box">
                        <img class="product__image" src="{{ asset('./storage/images/reviews-img/tg1.jpg') }}"
                            alt="Liquid Mango" />
                    </div>
                </div>
            </div>
        </section>

        <section class="contact">
            <h2 id="kon">KONTAKT</h2>
            <a href="https://t.me/GgYyPpSsY" class="kontakt__link">Skontaktuj się z menadżerem</a>
        </section>
        <section class="wholesale" id="wholesale">

            {{-- Form --}}
            <div class="form-container">
                <h2 class="form-title">
                    Chcesz zostać klientem hurtowym?</h2>
                <p class="form-subtitle" style="color: #fff;">Wypełnij formularz, a my do Ciebie napiszemy!!</p>

                <form class="wholesale-form" id="tg">
                    <label for="quantity" class="quantity-label" style="color: #fff;">Jaka jest całkowita ilość, której
                        potrzebujesz?</label>
                    <div class="slider-container">
                        <input type="range" id="quantity" name="quantity" min="50" max="500" value="50"
                            class="quantity-slider" oninput="this.nextElementSibling.value = this.value">
                        <output class="slider-output">50</output>
                    </div>

                    {{-- Name--}}
                    <input type="text" id="name" name="name" class="name__input" placeholder="Twoje imie">

                    {{-- Email --}}
                    <div class="email-container">
                        <input type="tel" id="email" name="email" class="email__input"
                            placeholder="elfvapeshop@gmail.com">
                    </div>
                    {{-- Submit button --}}
                    <button type="submit" class="submit__button">WYŚLIJ WNIOSEK</button>
                </form>
            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="container footer-container">
            <ul class="footer-info-list">
                <li class="info-item">
                    Dellers
                    <svg width="20" height="20" viewBox="0 0 20 20" class="footer-icon">
                        <use href="./storage/images/footer-icons/symbol-defs.svg#icon-chat-bubble-dots"></use>
                    </svg>
                </li>
                <li class="info-item">
                    <a href="https://t.me/GgYyPpSsY" target="_blank" class="info-link">@GgYyPpSsY</a>
                </li>
                <li class="info-item">
                    <a href="https://t.me/Fliinnt" target="_blank" class="info-link">@Fliinnt</a>
                </li>

                <li class="info-item">
                    <a href="https://t.me/qdrion_cs" target="_blank" class="info-link">@qdrion_cs</a>
                </li>
            </ul>

            <a href="#" class="footer-logo-link"><img src="{{ asset('./storage/images/logo/logo.svg') }}"
                    alt="logo-footer" class="footer-logo"></a>
            <ul class="footer-social_network">
                <li class="item-social_network-title">
                    Przyłącz się
                </li>
                <li class="item-social_network">
                    <div class="footer-icons">
                        {{-- Telegram Button--}}
                        <div class="footer-block-icon">
                            <svg width="20" height="20" viewBox="0 0 20 20" class="footer-icon">
                                './storage/images/footer-icons/symbol-defs-social.svg'
                                <use href="./storage/images/footer-icons/symbol-defs-social.svg#icon-telegram"></use>
                            </svg>
                        </div>

                        {{-- Instagram Button--}}
                        <div class="footer-block-icon">
                            <svg width="20" height="20" viewBox="0 0 20 20" class="footer-icon">
                                <use href="./storage/images/footer-icons/symbol-defs-social.svg#icon-instagram"></use>
                            </svg>
                        </div>
                    </div>
                </li>
                <li class="item-social_network">
                    <div class="konto-blik"><img src="{{ asset('./storage/images/konto/blik-logo.png') }}" alt="blik">
                    </div>
                </li>
            </ul>
        </div>
    </footer>


    <!-- Fixed Cart Button -->
    <button class="cart-button" aria-label="Open Cart">
        <svg class="cart-button__icon" width="30" height="30">
            <use href="./storage/images/footer-icons/symbol-defs.svg#icon-shopping-cart"></use>
        </svg>

        <p class="cart-number">{{ $cart->count() }}</p>
    </button>

    <!-- Modal Cart -->
    <div class="cart-modal" id="cart-modal">
        <div class="cart-modal__content">
            <button class="cart-modal__close" aria-label="Close Cart">✖️</button>
            <h2 class="cart-modal__heading">Your Cart</h2>

            {{-- Cart table --}}
            <div class="cart-table-container">
                <table class="cart-table">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Edit quantity</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                        Products
                        {{-- Loop for products from cart --}}
                        @forelse($cart as $product)
                            <tr class="tr-border">
                                <!-- Product name -->
                                <td>{{ $product->name }}</td>

                                <!-- Product price -->
                                <td>{{ $product->price }} zł</td>

                                <!-- Product quantity -->
                                <td>
                                    <!-- Decrease quantity -->
                                    <form action="{{ route('cart.update') }}" method="POST">
                                        @csrf
                                        <!-- rowId -->
                                        <input type="hidden" name="rowId" value="{{ $cart->where('id', $product->id)->first()->rowId }}">
                                        <!-- New quantity -->
                                        <input type="hidden" name="new_qty" value="{{ $product->qty - 1 }}">

                                        <!-- Decrease button -->
                                        <button type="submit" class="quantity-button decrease">-</button>
                                    </form>

                                    <!-- Old quantity -->
                                    <input type="number" class="quantity-input" value="{{ $product->qty }}" min="1" readonly>

                                    <!-- Increase quantity -->
                                    <form action="{{ route('cart.update') }}" method="POST">
                                        @csrf
                                        <!-- rowId -->
                                        <input type="hidden" name="rowId" value="{{ $cart->where('id', $product->id)->first()->rowId }}">
                                        <!-- New quantity -->
                                        <input type="hidden" name="new_qty" value="{{ $product->qty + 1 }}" >

                                        <!-- Increase button -->
                                        <button type="submit" class="quantity-button increase">+</button>
                                    </form>
                                </td>

                                {{-- Delete from cart --}}
                                <form action="{{ route('cart.delete') }}" method="POST" onsubmit="return confirm('Are you sure you want to remove {{ $product->name }} from cart?');">
                                    @csrf
                                    <!-- rowId -->
                                    <input type="hidden" name="rowId" value="{{ $cart->where('id', $product->id)->first()->rowId }}">
                                    <!-- Product id -->
                                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                                    <!-- Type -->
                                    <input type="hidden" name="type" value="{{ $product->options['type'] }}">

                                    <!-- Delete from cart button -->
                                    <td><button type="submit" class="remove-item">🗑</button></td>
                                </form>

                                {{-- Przejdź do kasy --}}
                                <form action="{{ route('cart.accept') }}" method="POST">
                                    @csrf
                                    <button class="button cart-modal__checkout">Przejdź do kasy</button>
                                </form>
                                {{-- Total price --}}
                                <div class="cart-modal__total" id="cart-total">Total: {{ $total }} zł.</div>

                                {{-- Cleat cart button --}}
                                <a
                                    href="{{ route('cart.destroy') }}" onclick="return confirm('Destroy the cart?');">
                                    <button class="cart-delete__basket">🛒&rarr;  <span class="bask">🗑</span></button>
                                </a>
                            </tr>
                            @empty
                                <div>
                                    <table class="cart-table">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <p>Cart is empty, add your products!</p>
                                                </th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                        @endforelse
                    </tbody>
                </table>
            </div>

        </div>
    </div>


    {{-- Hide session message after 3s. --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var flashMessage = document.getElementById('flash-message');

            if (flashMessage) {
                setTimeout(function() {
                    flashMessage.style.display = 'none';
                }, 3000);
            }
        });
    </script>

    <!-- <script src="/resources/js/filtr.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios@1.6.7/dist/axios.min.js"></script>
<script src="./resources/js/hurt.js"></script>
<script src="/resources/js/header-menu.js"></script>
<script src="/resources/js/reviews.js"></script> -->
</body>
</html>
